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
	
		

	$cname = $_POST['name'];
	$cemail = $_POST['email'];
	$ccomment = $_POST['comment'];
	
	
	
	$sql = "INSERT INTO Atlantic.customer_enquiry (customer_id, customer_name,customer_email,customer_comment) VALUES (NULL,'$cname','$cemail','$ccomment')";
	
	if (mysqli_query($conn,$sql)){
		echo "<script type='text/javascript'>alert('Successfully Submitted');</script>";
	} else{
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
	mysqli_close($conn);
	
	header("refresh:0;url=contactus.html");



	
?>
