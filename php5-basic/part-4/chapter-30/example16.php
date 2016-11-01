<?php

$im = imagecreate(100, 100);

$w = imagecolorallocate($im, 255, 255, 255);

$c1 = imagecolorallocate($im, 0, 0, 255);
$c2 = imagecolorallocate($im, 0, 255, 0);

imagefilledrectangle($im, 0, 0, imagesx($im), imagesy($im), $w);

$style = array($c2, $c2, $c2, $c2, $c2, $c2, $c2, $c1, $c1, $c1, $c1);

imagesetstyle($im, $style);

imagesetthickness($im, 2);

imageline($im, 0, 0, 100, 100, IMG_COLOR_STYLED);

header("Content-Type: image/png");

imagepng($im);

imagedestroy($im);

?>