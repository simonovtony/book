<?php

$image = imagecreate(400, 400);

$txtcolor = "FFFF00";

sscanf($txtcolor, "%2x%2x%2x", $red, $green, $blue);

imagecolorallocate($image, $red, $green, $blue);

$txt = sprintf("%2x%2x%2x", $red, $green, $blue);

imagepng($image, 'test.png');

imagedestroy($image);

?>

<label>txtcolor: <?= $txtcolor ?></label><br>
<label>rgb: <?= "$red $green $blue" ?></label><br>
<img src="test.png" alt="test">
