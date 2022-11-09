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
	
		


	$cemail = $_POST['email'];

	
	
	
	$sql = "INSERT INTO Atlantic.customer_newsletter (customer_id, customer_email) VALUES (NULL,'$cemail')";
	
	if (mysqli_query($conn,$sql)){
		echo "<script type='text/javascript'>alert('Successfully Submitted');</script>";
	} else{
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
	mysqli_close($conn);
	
	header("refresh:0;url=movies.html");



	
?>