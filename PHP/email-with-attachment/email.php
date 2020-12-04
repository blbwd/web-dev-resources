<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$your_message = $_REQUEST['message'];


/* Email Detials */
$mail_to = $email; // Receipiant' email id
$from_mail = "support@wavesdream.in";
$from_name = $name;
$reply_to = $email;

$subject = "Email with attachment testing function";
$message = "Name: " . $name . "<br>";
$message .= "Email: " . $email . "<br>";
$message .= "Phone: " . $phone . "<br>";
$message .= "Message: " . $your_message; 

/* Attachment File */
// Attachment location
$image = 'sample.jpg'; // Name of the attached file, sample.jpg
$file_name = $image;
$path = "/var/www/applications/emailattachment/images/"; // Document root path of the attahment directory

// Read the file content
$file = $path.$file_name;
$file_size = filesize($file);
$handle = fopen($file, "r");
$content = fread($handle, $file_size);
fclose($handle);
$content = chunk_split(base64_encode($content));
   
/* Set the email header */
// Generate a boundary
$boundary = md5(uniqid(time()));
   
// Email header
$header = "From: ".$from_name." <".$from_mail.">".PHP_EOL;
$header .= "Reply-To: ".$reply_to.PHP_EOL;
$header .= "MIME-Version: 1.0".PHP_EOL;

// Multipart wraps the Email Content and Attachment
$header .= "Content-Type: multipart/mixed; boundary=\"".$boundary."\"".PHP_EOL;
$header .= "This is a multi-part message in MIME format.".PHP_EOL;
$header .= "--".$boundary.PHP_EOL;

// Email content
// Content-type can be text/plain or text/html
$header .= "Content-type:text/html; charset=iso-8859-1".PHP_EOL;
$header .= "Content-Transfer-Encoding: 7bit".PHP_EOL.PHP_EOL;
$header .= "$message".PHP_EOL;
$header .= "--".$boundary.PHP_EOL;
   
// Attachment
// Edit content type for different file extensions
$header .= "Content-Type: application/xml; name=\"".$file_name."\"".PHP_EOL;
$header .= "Content-Transfer-Encoding: base64".PHP_EOL;
$header .= "Content-Disposition: attachment; filename=\"".$file_name."\"".PHP_EOL.PHP_EOL;
$header .= $content.PHP_EOL;
$header .= "--".$boundary."--";
   
  // Send email
  if (@mail($mail_to, $subject, "", $header)) 
  {
    $confirmation = "<p>Your enquiry has been sent.</p>";
  } 
  else 
  {
    $confirmation = "<p>Sorry, error occured this time.</p>";
  }

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Email confirmation</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<?php if ($confirmation){?>
<div data-role="page" data-dialog="true" id="pagetwo">
  <div data-role="header">
    <h1>Confirmation!</h1>
  </div>

  <div data-role="main" class="ui-content">
    <p><?php echo $confirmation;?></p>
    <a href="index.html#pageone">Go to Previous Page</a>
  </div>

  <div data-role="footer">
    <h1>&copy; All rights reserved</h1>
  </div>
</div>
<?php } ;?>

</body>
</html>
