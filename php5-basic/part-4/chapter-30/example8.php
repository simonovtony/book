<?php

$image = imagecreatetruecolor(400, 400);

imagetruecolortopalette($image, true /* подбирать цвет */, 16 /* цветов */);

imagepalettetotruecolor($image);

imagedestroy($image);

?>