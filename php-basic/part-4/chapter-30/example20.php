<?php

$tile = imagecreatefromjpeg("sample1.jpg");

$im = imagecreatetruecolor(800, 600);

imagefill($im , 0, 0, imagecolorallocate($im, 0, 255, 0));

imagesettile($im, $tile);

$p = array();

for($i = 0; $i < 4; $i++) {
    array_push($p, mt_rand(0, imagesx($im)), mt_rand(0, imagesy($im)));
}

imagefilledpolygon($im, $p, count($p) / 2, IMG_COLOR_TILED);

header('Content-Type: image/jpeg');
imagejpeg($im);

# header('Content-Type: image/png');
# imagepng($im);

?>