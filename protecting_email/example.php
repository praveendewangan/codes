<?php
header('Content-type: image/jpeg');

if(isset($_GET['email'])){
    $email = $_GET['email'];
}else{
    $email = "Email not specified";
}

$email_length = strlen($email);

$font_size = 4;

$image_height = ImageFontHeight($font_size);
$image_width = ImageFontWidth($font_size)*$email_length;

$image = imagecreate($image_width,$image_height);

imagecolorallocate($image,255,255,255);
$font_color = imagecolorallocate($image,0,0,0);
imagestring($image,$font_size,0,0,$email,$font_color);
imagejpeg($image);
?>