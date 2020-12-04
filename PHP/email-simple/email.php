<?php
$subject='This is a sample mail.'; // Subject of your email
$to='sanjay@esigners.in';  //To Email
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From:Company Name <'admin@gmail.com'>" . "\r\n"; // Sender's Email
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message='Content of the mail';
if (@mail($to, $subject, $message, $headers))
{
	echo 'success';
}
else
{
	echo 'error';
}
?>
