<!DOCTYPE html>
<html lang="en">
<head>
<title>Atlantic Cinema</title>
<meta charset="utf-8">


<link rel="stylesheet" href="atlantic.css">
	 <script defer src="assets/js/newsletterform.js"></script>
<script>
function validateEmail(){
	var email = document.getElementById("email").value;
	email.trim();
	if(email.length > 0){ //make sure it is not empty
		var regexp = /^([\w\.-])+@([\w]+\.){1,3}([A-z]){2,3}$/;
		if(regexp.test(email)){
			return true;
		}
		else{
			alert("Email entered in wrong format.");
			return false;
		}
		alert("Please fill in your Email.");
		return false;
	}
}
</script>
</head>
<body>
<div id="wrapper">
<header>
	<div class="logo">
	<img src="assets/img/logo.gif" height="90" width="250" alt="logo">
	</div>
</header>
<nav><ul>
	 <li><a href="index.php">Home</a></li>
        <li><a href="movies.html">Movies</a></li>
        <li><a href="buytickets.html">Buy Tickets</a></li>
     
		<li><a href="contactus.html">Contact Us</a></li>
		
								
								
</li>

</ul>
</nav>
<?php
error_reporting(0);
//Ensure that database connection is good before any code is executed. 
$conn = mysqli_connect("localhost", "root", "", "Atlantic");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}	
	$selectedSeats = preg_split ("/\,/", $_GET["seats"]); 
	if($selectedSeats == NULL){
		mysqli_close($conn);
	}
	$array = array();
 $i = 0;
foreach ($selectedSeats as $seat) {
	
  $array[$i] = $seat; 
	$i++;
}
$quanSeats = 0;
$quanSeats = count($array);

if($quanSeats == 0 ) {
	echo "Select choose your seatings before submitting.<br>";
	return;
}

if($quanSeats > 0 ){

	updateOrderTable($quanSeats,1,$quanSeats*12.5);
	foreach ($selectedSeats as $seat){	
			updateSeatTable(getOrderID($abcd),$seat,1);

	}
	updateSalesTable(getCurrentTotals(1) + ($quanSeats * 12.5),1);
	$totalprice = $quanSeats * 12.5;
}



mysqli_close($conn);
function getOrderID($abcd){
	$conn = mysqli_connect("localhost", "root", "", "Atlantic");
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
	$sql = "SELECT * FROM Atlantic.orders ORDER BY order_id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row["order_id"];
}	

function updateOrderTable($quantity,$ticket_id,$current) {
	$conn = mysqli_connect("localhost", "root", "", "Atlantic");
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
	$sql = "INSERT INTO Atlantic.orders (ticket_id, quantity,current_sale) VALUES ($ticket_id, $quantity,$current);";
	if (!mysqli_query($conn, $sql)) {
		echo "Failed to update database: " . mysqli_error($conn);
		mysqli_close($conn);
	}
}
function updateSeatTable($orderid,$seats,$ticket_id ) {
	$conn = mysqli_connect("localhost", "root", "", "Atlantic");
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
	$sql = "INSERT INTO Atlantic.hall1 (order_id,ticket_id, ticket_seat) VALUES ($orderid,$ticket_id,'$seats');";
	if (!mysqli_query($conn, $sql)) {
		echo "Failed to update database: " . mysqli_error($conn);
		mysqli_close($conn);
	}
}
	
function getCurrentTotals($ticket_id) {
	$conn = mysqli_connect("localhost", "root", "", "Atlantic");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
	$sql = "SELECT totals FROM Atlantic.totalsales WHERE ticket_id = $ticket_id;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get totals for Movies $ticket_id : " . mysqli_error($conn);
	}
	$result = mysqli_fetch_row($result);
	return $result[0];
}
function updateSalesTable($total, $ticket_id) {
	$conn = mysqli_connect("localhost", "root", "", "Atlantic");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}

	$sql = "UPDATE Atlantic.totalsales SET totals = $total WHERE ticket_id = $ticket_id;";
	if (!mysqli_query($conn, $sql)) {
		echo "Failed to update value for ticket id $ticket_id : " . mysqli_error($conn);
	}
}

?>
<main>

<table><h1 style = "text-align:left;">Cart Summary</h1>
			<tr>
				<th>Ticket</th>
				<th>Seating</th>
				<th>Price</th>
				<th>Qty</th>
				<th>Sub-Total</th>
			</tr>
			<tr>
				<th>Black Adam</th>
				<th><?php $i=0;
				$array = array();
				foreach ($selectedSeats as $seat) {
				$array[$i] = $seat; 
				echo "$array[$i]";
				echo " ";		
				$i++;
				
				}?></th>
				<th>$ 12.50</th>
				<th><?php echo "$quanSeats"?></th>
				<th><?php echo "$totalprice"?></th>
			</tr>


		</table><br><br><br><a href="GoToCheckout.php" type="submit">Go to Checkout</a>
		
</main>


<footer>
   <form action="newsletterform.php" method="post" class="message">

           
		   
	<div class="message">
	<input type = "email" name = "email" id = "email" required placeholder = "Enter your email address" onchange="validateEmail()"> 

	<input type="submit" value="Join"> 
			
		</div>	
          </form>
		  
		  

<h4>Copyright &copy; Atlantic Cinema 2022 </h4>

</footer>

</body>


</html>