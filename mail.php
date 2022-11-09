<!DOCTYPE html>
<html>
<body>

<h1>Welcome to Atlantic Cinema</h1>

<p>Monthly Newsletter</p>

<?php
$to      = 'f31ee@localhost';
$subject = 'the subject';
$message = 'hello from php mail';
$headers = 'From: Atlantic_Cinema@localhost' . "\r\n" .
    'Reply-To: Atlantic_Cinema@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-fAtlantic_Cinema@localhost');
echo ("mail sent to : ".$to);
?> 

</body>
</html>
