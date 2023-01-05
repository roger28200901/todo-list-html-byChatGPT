<?php
session_start();
// Set the character set to use for the verification code
$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

// Generate a random string of characters from the character set
$verification_code = '';
for ($i = 0; $i < 4; $i++) {
  $verification_code .= $characters[rand(0, strlen($characters) - 1)];
}

// Store the verification code in a session variable
$_SESSION['verification_code'] = $verification_code;

// Set the content type header to output a PNG image
header('Content-Type: image/png');

// Create an image with the verification code text
$image = imagecreatetruecolor(100, 30);
$background_color = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $background_color);
$text_color = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 5, 30, 8, $verification_code, $text_color);

// Output the image
imagepng($image);
imagedestroy($image);



// session_start();
// // Set the content type to image/png
// header('Content-Type: image/png');

// // Create an image with the desired width and height
// $image = imagecreatetruecolor(100, 30);

// // Choose a background color for the image
// $bg = imagecolorallocate($image, 255, 255, 255);

// // Fill the image with the background color
// imagefill($image, 0, 0, $bg);

// // Choose a text color for the verification code
// $text_color = imagecolorallocate($image, 0, 0, 0);

// // Get the verification code from the session variable
// $text = $_SESSION['verification_code'];
// // Write the verification code text on the image
// imagestring($image, 5, 10, 8, $text, $text_color);

// // Output the image to the browser
// imagepng($image);

// // Destroy the image to free up memory
// imagedestroy($image);
?>
