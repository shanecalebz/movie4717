<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Atlantic Cinema</title>

		<link rel="stylesheet" type="text/css" href="../atlantic.css">
	<script defer src="assets/js/newsletterform.js"></script>
</head>
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
        <li><a href="cart.html">Cart</a></li>
		<li><a href="contactus.html">Contact Us</a></li>
		  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">For Members</a>
    <div class="dropdown-content">
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
     
    </div>
		
							
								
</li>
		<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">For Admin</a>
    <div class="dropdown-content">
       <a href="admin/create_user.php">Create user</a>
     
	
      
    </div>
	
  </li>


</ul>
</nav>
<body>
	<div class="header">
		<h2>Admin - create user</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
		</div>
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
</div>
</body>


</html>