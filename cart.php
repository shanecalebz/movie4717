<!DOCTYPE html>
<html lang="en">
<head>
<title>Atlantic Cinema</title>
<meta charset="utf-8">


<link rel="stylesheet" href="atlantic.css">
<script type = "text/javascript"  src = "assets/js/calculatePrice.js" ></script>
<script defer src="assets/js/newsletterform.js"></script>

<script>
function clear1(){
document.getElementById("reset").reset();


}

 function myFunc() {
     document.getElementById("reset").reset();
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
        <li><a href="cart.php">Cart</a></li>
		<li><a href="contactus.html">Contact Us</a></li>
		
								
								
</li>

</ul>
</nav>
<main>
<form action="cart.php" method="post" id="reset" >
 
		<table id="CartTable" border='0'>
		<tr><th> Poster</th>
<th>Movie Name</th><th>

<th>Qty</th><th>
<th>Price S$</th>
		</tr>
            <tr>
                <td><a href="BlackAdam.html"><img src="assets/img/movie1_small.PNG" height="100px" width="100px" alt="blackadam" ></a></td>
                <td><b>Black Adam</b><label></td>				              
				<td>
				
                    <label style="width:150px; padding-left:8px;"><input type="checkbox" id="BlackCheck" name="BlackCheck"  onchange="calculatePrice(1)"></label>
                 
                </td>
				<td></td> 
                <td>
                    
                        <label><input type="number" name="BlackQuan" id="BlackQuan" value="0" min="0" style="width:30px;" onchange="calculatePrice(1)"></label>
                    	
				</td>					
				<td>
                    <p>
					  <span id="BlackTotal"></span>
					</p>
                </td>
            </tr>
            <tr>
                <td><a href="Smile.html"><img src="assets/img/movie2_small.PNG" height="100px" width="100px alt="smile"></a></td>
                <td><b>Smile</b></td>
				<td>
				
                    <label style="width:150px; padding-left:8px;"><input type="checkbox" id="BulletCheck" name="BulletCheck" onchange="calculatePrice(2)"></label>
                 
                </td>
				<td></td> 
                <td>
                    
                        <label><input type="number" name="SmileQuan" id="SmileQuan" value="0" min="0" style="width:30px;" onchange="calculatePrice(2)"></label>
                    			
				</td>				
				<td>
                    <p>
					  <span id="SmileTotal"></span>
					</p>
                </td>
            </tr>
            <tr>
                <td><a href="mrsharry.html"><img src="assets/img/movie3_small.PNG" alt="mrsharry"  height="100px" width="100px"></a></td>
                <td><b>Mrs Harris Goes To Paris</b></td>
				<td>
				
                    <label style="width:150px; padding-left:8px;"><input type="checkbox" id="mrsharry" name="mrsharry" onchange="calculatePrice(3)"></label>
                 
                </td>
				<td></td> 
                <td>
                    
                        <label><input type="number" name="mrsharryQuan" id="mrsharryQuan" value="0" min="0" style="width:30px;" onchange="calculatePrice(3)"></label>
                    	
				</td>					
				<td>
                    <p>
					  <span id="mrsharryTotal"></span>
					</p>
                </td>
            </tr>
			<tr>
                <td><p>
                 
   
    
     Total Price: S$<span id="totalPrice"onclick="myFunc()" value="Reset" ></span> <input type="button" value="Reset" onclick="myFunc()"> 
	 
                <td>
                    
                </td>
            </tr>
			<tr>
			<td>  
			<input type="submit" id="submit" value="Go To Checkout" min="0" style="width:120px;">
			</td><td></td><td></td><td></td>
			<td>
				
				
			</td>
			</tr>
        </table>
		</form>

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