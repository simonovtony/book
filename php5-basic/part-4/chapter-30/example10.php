<?php

$image = imagecreate(400, 400);

$color = imagecolorallocate($image, 0, 0, 0);

$color = imagecolorclosest($image, 0, 255, 0);

imagecolortransparent($image, $color);

imagepng($image, 'test.png');

imagedestroy($image);

?>

<img src="test.png" alt="test">
