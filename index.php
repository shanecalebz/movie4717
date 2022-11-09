<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Atlantic Cinema</title>
<meta charset="utf-8">
<link rel="stylesheet" href="atlantic.css">
<style>
  .home-container {
				max-width: 95%;
				padding: 0 20px;
				margin: 0 auto;
			}
			.container {
				display: flex;
				flex-direction: column;
				padding: 20px;
			}
			.poster-grid {
				display: grid;
				grid-template-columns: repeat(4, 1fr);
				overflow: hidden;
				padding: 30px 0;
			}
			.movie-card {
				width: 250px;
				display: flex;
				flex-direction: column;
				align-items: flex-start;
				background-color: #333;
				color: white;
				padding: 10px;
				margin: 10px;
				border-radius: 10px;
				box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
				transition: 0.3s ease-in-out;
			}
			.movie-card:hover {
				transform: scale(1.05);
			}
			.movie-title {
				padding: 10px 0;
				font-size: 1.2em;
			}
			.poster img {
				width: 200px;
				height: 300px;
				width: 100%;
				padding-left: 10px;
			}
			.movie-rating {
				background-color: hsl(42, 100%, 71%);
				color: hsl(218, 18%, 16%);
				border-radius: 5px;
				padding: 5px;
				font-size: 0.8em;
				margin-bottom: 20px;
			}
			.movie-runtime {
				padding: 20px 0;
			}
			.card-buy-ticket {
				font-family: "Montserrat", sans-serif;
				font-size: 1.13em;
				background-color: hsl(42, 100%, 71%);
				border: none;
				text-decoration: none;
				color: #333;
				border-radius: 5px;
				padding: 5px;
			}
			#wrapper {
				background-color: #f2cc8f;
				color: #333;
			}
</style>

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
<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
 <a href="Wakanda.html"> <img src="assets/img/img_movie1.png" height="300" width="250" style="width:100%"></a>
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
   <a href="smile.html"> <img src="assets/img/img_movie2.png" height="300" width="250" style="width:100%"></a>

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
   <a href="Avatar.html"> <img src="assets/img/img_movie3.png" height="300" width="250" style="width:100%"></a>
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
   <a href="PreyForTheDevil.html"> <img src="assets/img/img_movie4.png" height="300" width="250" style="width:100%"></a>
  
</div>


<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<h4>Now Showing</h4>
					<div class="poster-grid">
						<div class="movie-card">
							<div class="poster">
								<a href="blackadam.html">
									<img src="assets/img/movie1_small.png" alt="">
								</a>
							</div>
							<h2 class="movie-title">Black Adam</h2>
							<p class="movie-rating">PG-13</p>
							<p class="movie-runtime">125 minutes</p>
							<a href="#" class="card-buy-ticket">Buy Tickets</a>
						</div>
						<div class="movie-card">
							<div class="poster">
								<a href="blackadam.html">
									<img src="assets/img/movie2_small.png" alt="">
								</a>
							</div>
							<h2 class="movie-title">Smile</h2>
							<p class="movie-rating">M18</p>
							<p class="movie-runtime">115 minutes</p>
							<a href="#" class="card-buy-ticket">Buy Tickets</a>
						</div>
						<div class="movie-card">
							<div class="poster">
								<a href="blackadam.html">
									<img src="assets/img/movie3_small.png" alt="">
								</a>
							</div>
							<h2 class="movie-title">Mrs. Harris Goes To Paris</h2>
							<p class="movie-rating">PG</p>
							<p class="movie-runtime">90 minutes</p>
							<a href="#" class="card-buy-ticket">Buy Tickets</a>
						</div>
					</div>
					<h4>Coming Soon</h4>
					<div class="poster-grid">
						<div class="movie-card">
							<div class="poster">
								<a href="blackadam.html">
									<img src="assets/img/com_movie1_small.png" alt="">
								</a>
							</div>
							<h2 class="movie-title">Prey For The Devil</h2>
							<p class="movie-rating">NC-16</p>
							<p class="movie-runtime">93 minutes</p>
						</div>
						<div class="movie-card">
							<div class="poster">
								<a href="blackadam.html">
									<img src="assets/img/com_movie2_small.png" alt="">
								</a>
							</div>
							<h2 class="movie-title">Black Panther</h2>
							<p class="movie-rating">PG</p>
							<p class="movie-runtime">135 minutes</p>
						</div>
						<div class="movie-card">
							<div class="poster">
								<a href="blackadam.html">
									<img src="assets/img/com_movie3_small.png" alt="">
								</a>
							</div>
							<h2 class="movie-title">Avatar</h2>
							<p class="movie-rating">N/A</p>
							<p class="movie-runtime">280 minutes</p>
						</div>
					</div>




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