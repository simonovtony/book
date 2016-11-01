<?php

$i = imagecreate(100, 100);

$c = imagecolorallocate($i, 1, 255, 1);

imagefilledrectangle($i, 0, 0, imagesx($i) - 1, imagesy($i) - 1, $c);

imagecolortransparent($i, $c);

$c = imagecolorallocate($i, 0, 0, 0);

imagerectangle($i, 25, 25, 75, 75, $c);

imagepng($i, 'test.png');

imagedestroy($i);

?>

<img src="test.png" alt="test">
