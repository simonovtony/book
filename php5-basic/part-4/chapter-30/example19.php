<?php

$image = imagecreate(400, 400);

$sample02 = imagecreatefrompng('sample02.png');

$background = imagecolorallocate($image, 255, 255, 255);

imagefilledrectangle($image, 0, 0, 400, 400, $background);

imagesettile($image, $sample02);

imagefilledrectangle($image, 100, 100, 300, 300, IMG_COLOR_TILED);

header('Content-Type: image/png');

imagepng($image);

imagedestroy($image);

?>