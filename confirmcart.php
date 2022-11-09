
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Atlantic";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
	
	
	
	$fname = $_POST['FullName'];
	$fcontact = $_POST['ContactNo'];
	$femail = $_POST['Email'];
	
	$sql = "INSERT INTO Atlantic.confirmcart (id, FullName,Email,ContactNo) VALUES (NULL,'$fname','$femail','$fcontact')";
	if (mysqli_query($conn,$sql)){
		
		header("Location:ticket.php");
	} else{
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
		
		
		$sql = "SELECT * FROM Atlantic.orders ORDER BY order_id DESC LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	
	function callseats(){	
	$conn = mysqli_connect("localhost", "root", "", "Atlantic");
	$sql = "SELECT  ticket_seat FROM Atlantic.hall1 WHERE order_id = (SELECT MAX(order_id) FROM Atlantic.hall1)";
		if (mysqli_query($conn,$sql)){
			$result1 = mysqli_query($conn, $sql);
			$op  = NULL;
		while($row1 = mysqli_fetch_array($result1,MYSQL_ASSOC)){
			$op = $op.$row1["ticket_seat"]." ";
		}
		return $op;
		}
		
		else{
		echo "Error: " . $sql . " " . mysqli_error($conn);
		}
	}
		
		
		
		
		

	mysqli_close($conn);

?>