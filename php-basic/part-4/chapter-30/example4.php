<?php

//$image = imagecreatetruecolor(400, 400);
$image = imagecreate(400, 400);

imagecolorallocate($image, 0, 0, 0);

//header('Content-Type: image/jpg');
header("Content-Type: image/png");

//imagejpeg($image);
imagepng($image); // imagegif($image)

imagedestroy($image);

?>