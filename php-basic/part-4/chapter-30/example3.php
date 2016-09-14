<?php

$string = $_SERVER['QUERY_STRING'];

if(!$string) {
    echo '<img src="example3.php?Hello+World">';
    exit;
}

$im = imagecreatefromgif("button.gif");

$color = imagecolorallocate($im, 0, 0, 0);

$px = (imageSX($im) - 6.5 * strlen($string)) / 2;

imagestring($im, 3, $px, 1, $string, $color);

header("Content-Type: image/png");

imagepng($im);

imagedestroy($im);

?>