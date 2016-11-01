<?php

$from = imagecreatefromjpeg('sample2.jpg');
$to = imagecreatetruecolor(1000, 1000);

imagecopyresampled($to, $from,
    0, 0, 0, 0, imagesx($to), imagesy($to), imagesx($from), imagesy($from)
);

//header('Content-Type: text/jpeg');

imagejpeg($to, 'test.jpg');

imagedestroy($from);
imagedestroy($to);

?>

<img src="test.jpg" alt="test">
