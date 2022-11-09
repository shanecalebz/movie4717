<!DOCTYPE html>
<html>
<body>

<h1>Welcome to Atlantic Cinema</h1>

<p>Purchase confirmed</p>

<?php
$to      = 'f31ee@localhost';
$subject = 'the subject';
$message = 'Purchase confirmation successful';
$headers = 'From: f32ee@localhost' . "\r\n" .
    'Reply-To: f31ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-fAtlantic_Cinema@localhost');
echo ("mail sent to : ".$to);

?> 
<br>
<a href="index.php">Go back</a>
</body>
</html>
