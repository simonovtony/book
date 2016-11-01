<?php

$image = imagecreate(400, 400);

imagefill($image, 0, 0, imagecolorallocate($image, 128, 128, 128));

$color = imagecolorallocate($image, 255, 0, 0);

for($i = 100; $i <= 300; $i++) {
    if($i >= 175 && $i <= 225)
        continue;
    imagesetpixel($image, $i, 200, $color);
}

$color = imagecolorat($image, 100, 200);

$colors = array_values(imagecolorsforindex($image, $color));

imagepng($image, 'test.png');

imagedestroy($image);

?>

<span>RGB(<?= $colors[0] . "," . $colors[1] . "," . $colors[2] ?>)</span><br>
<img src="test.png" alt="test">
