<?php

$image = imagecreate(400, 400);

$color = imagecolorallocate($image, 0, 0, 0);

imagefilledrectangle($image, 0, 0, 400, 400, $color);

$font = @imageloadfont('Homltalic.gdf');

$color = imagecolorallocate($image, 255, 0, 0);

imagestring($image, $font, 0, 0, 'Hello World!', $color);

imagestringup($image, $font, 200, 200, 'Hello World!', $color);

$width = imagefontwidth($font);

$height = imagefontheight($font);

imagepng($image, 'test.png');

imagedestroy($image);

?>

<span>Font Width: <?= $width ?></span><br>
<span>Font Height: <?= $height ?></span><br>

<img src="./test.png" alt="test">
