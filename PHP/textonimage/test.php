<?php
  //Set the Content Type
  header('Content-type: image/jpeg');

  // Create Image From Existing File
  $jpg_image = imagecreatefromjpeg('test2.jpg');

  // Allocate A Color For The Text
  $white = imagecolorallocate($jpg_image, 0, 0, 0);

  // Set Path to Font File
  $font_path = './Ubuntu-Medium.ttf';

  // Set Text to Be Printed On Image
  $text = "Lorem Ipsum Dummy";

  $text2 = "Lorem Ipsum Dummy";

  // Print Text On Image
  imagettftext($jpg_image, 15, 0, 40, 430, $white, $font_path, $text);

  imagettftext($jpg_image, 15, 0, 40, 450, $white, $font_path, $text2);

  // Send Image to Browser
  imagejpeg($jpg_image);

  // Clear Memory
  imagedestroy($jpg_image);
?>
