<?php

$image = imagecreate(400, 400);

imagecolorallocate($image, 128, 128, 128);

$c = imagecolorat($image, 200, 200);

list($red, $green, $blue) = array_values(imagecolorsforindex($image, $c));

echo "R=$red, G=$green, B=$blue";

imagepng($image, 'test.png');

imagedestroy($image);

?>