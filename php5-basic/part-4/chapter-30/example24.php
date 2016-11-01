<?php

require_once "example23.php";

$string = toUnicodeEntities("Привет, мир!");

$font = "times.ttf";

$im = imagecreatefrompng("sample02.png");

$angle = (microtime(true) * 10) % 360;

# $angle = rad2deg(atan2(imagesx($im), imagesy($im));

$size = imagettfgetmaxsize($angle, $font, $string, imagesx($im), imagesy($im));

$shadow = imagecolorallocate($im, 0, 0, 0);

$color = imagecolorallocate($im, 128, 255, 0);

$sz = imagettfsize($size, $angle, $font, $string);

$x = (imagesx($im) - $sz[0]) / 2 + $sz[2];
$y = (imagesy($im) - $sz[1]) / 2 + $sz[3];

imagettftext($im, $size, $angle, $x + 3, $y + 2, $shadow, $font, $string);

imagettftext($im, $size, $angle, $x, $y, $color, $font, $string);

header("Content-Type: image/png");

imagepng($im);

imagedestroy($im);

?>