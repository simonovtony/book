<?php

$image = imagecreate(400, 400);

$background = imagecolorallocate($image, 255, 255, 255);

imagefilledrectangle($image, 0, 0, 400, 400, $background);

$color1 = imagecolorallocate($image, 255, 0, 0);

$color2 = imagecolorallocate($image, 0, 0, 255);

imagesetstyle($image, array($color1, $color2, $color1, $color2));

imagesetthickness($image, 2);

imagearc($image, 200, 200, 100, 100, 0, 200, IMG_COLOR_STYLED);

header('Content-Type: image/png');

imagepng($image);

imagedestroy($image);

?>