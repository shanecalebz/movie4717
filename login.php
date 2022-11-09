<?php include('functions.php') ?>
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
		 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">For Members</a>
    <div class="dropdown-content">
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
     
    </div>
		
							
								
</li>
	

</ul>
</nav>
<main>
<h2>Login</h2>
<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
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