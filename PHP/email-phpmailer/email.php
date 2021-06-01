<?php
include 'class.phpmailer.php';

$from_mail = "formemail@gmail.com";
$from_name = "John Doe";
$subject = "This is email subject";
$message = "This is body of the message.";
$mailto = "toemail1@gmail.com";
$cc  = "toemail2@gmail.com";

$email = new PHPMailer();
$email->From      = $from_mail;
$email->FromName  = $from_name ;
$email->Subject   = $subject;
$email->Body      = $message;
$email->AddAddress( $mailto );
$email->AddCC( $cc );

// For file attachment
$file_to_attach = $receipt_absolute_directory;
$email->AddAttachment( $file_to_attach.$filename );

if(!$email->Send())
{
   $alert =  "Message could not be sent." . $mail->ErrorInfo; 
   exit;
}
else {
   $alert = "Email has been sent successfully";
}

echo $alert;
?>