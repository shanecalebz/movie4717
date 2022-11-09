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
	 <li><a href="index.html">Home</a></li>
        <li><a href="movies.html">Movies</a></li>
        <li><a href="buytickets.html">Buy Tickets</a></li>
        
		<li><a href="contactus.html">Contact Us</a></li>
		
								
								
</li>

</ul>
</nav>
<main>

<form action="confirmcart.php" method="post" class="confirmcart">
	
		<div>
			<label for="name">Full Name:</label><br>
			<input type="text" id="FullName" name="FullName" onchange="validateName()" placeholder="" required />
        </div>
		<div>
			<label for="email">Email:</label><br>
			<input type="email" id="Email" name="Email"  onchange="validateEmail()" placeholder="" required />
        </div>	
		
		<div>
			<label for="contact">Contact Number:</label><br>
			<input type="tel" id="ContactNo" name="ContactNo"  onchange="validateContact()" placeholder="" required />
        </div>
		
		<br>
		
		<button type="submit" class="submitbutton" >Submit</button>
		<input type="reset">
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