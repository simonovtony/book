<?php

$size = 300;

$im = imagecreatetruecolor($size, $size);

$back = imagecolorallocate($im, 255, 255, 255);

imagefilledrectangle($im, 0, 0, $size - 1, $size - 1, $back);

$yellow = imagecolorallocatealpha($im, 255, 255, 0, 75 /* 0 - 127 */);
$red = imagecolorallocatealpha($im, 255, 0, 0, 75);
$blue = imagecolorallocatealpha($im, 0, 0, 255, 75);

$radius = 150;

imagefilledellipse($im, 100, 75, $radius, $radius, $yellow);
imagefilledellipse($im, 120,  165, $radius, $radius, $red);
imagefilledellipse($im, 187, 125, $radius, $radius, $blue);

header('Content-Type: image/png');

imagepng($im, 'test.png');
imagepng($im);

imagedestroy($im);

?>