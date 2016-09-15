<?php

$image = imagecreate(400, 400);

$background = imagecolorallocate($image, 255, 255, 255);

imagefilledrectangle($image, 0, 0, 400, 400, $background);

$color = imagecolorallocate($image, 255, 0, 0);

imagefilledrectangle($image, 100, 100, 300, 300, $color);

$color = imagecolorallocate($image, 0, 0, 255);

imagefill($image, 300, 300, $color);

$color = imagecolorallocate($image, 0, 255, 0);

imagefilltoborder($image, 0, 0, 2, $color);

header('Content-Type: image/png');

imagepng($image);

imagedestroy($image);

?>