<?php

//$image = imagecreatefromjpeg('image.jpg');
//$image = imagecreatefrompng('image.jpg');
$image = imagecreate(400, 400);

imagecolorallocate($image, 0, 0, 0);

echo "ширина: " . imagesx($image), "<br>";
echo "высота: " . imagesy($image), "<br>";
echo "кол-во цветов: " . imagecolorstotal($image), "<br>";
echo "тип цвета: " . (imageistruecolor($image) ? "полноцветовая" : "палитровая" ), "<br>";

imagedestroy($image);

?>