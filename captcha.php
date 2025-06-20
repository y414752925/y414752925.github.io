<?php
session_start();
$code = '';
for ($i = 0; $i < 4; $i++) { $code .= rand(0, 9); }
$_SESSION['captcha'] = $code;
header("Content-type: image/png");
$image = imagecreate(70, 30);
$bg = imagecolorallocate($image, 30, 30, 30);
$fg = imagecolorallocate($image, 255, 255, 255);
imagestring($image, 5, 10, 8, $code, $fg);
imagepng($image);
imagedestroy($image);