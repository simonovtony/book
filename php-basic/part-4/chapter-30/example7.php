<?php

$image = imagecreate(400, 400);

imagecolorallocate($image, 0, 0, 0);

//imagegif($image);
//imagegif($image, 'test.gif');
//imagegif($image, 'test.gif', 80);

//imagejpeg($image);
//imagejpeg($image, 'test.jpg');
//imagejpeg($image, 'test.jpg', 90);

//imagepng($image);
//imagepng($image, 'test.png');
imagepng($image, 'test.png', 100);

imagedestroy($image);

?>