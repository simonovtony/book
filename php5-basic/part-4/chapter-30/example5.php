<?php

//$image = imagecreatefromgif('image.gif');
//$image = imagecreatefromjpeg('image.jpg');
$image = imagecreatefrompng('image.png');

header('Content-Type: image/png');

// imagegif($image)
// imagejpeg($image)
imagepng($image);

imagedestroy($image);

?>