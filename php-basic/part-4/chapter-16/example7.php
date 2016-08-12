<?php

$files = array(
    "img10.gif",
    "img1.gif",
    "img2.gif",
    "img20.gif",
);

asort($files);

echo "<pre>";
print_r($files);
echo "</pre>";

////////////////////////////////////////////

$files = array(
    "img10.gif",
    "img1.gif",
    "img2.gif",
    "img20.gif",
);

natsort($files);
//natcasesort($files);

echo "<pre>";
print_r($files);
echo "</pre>";



?>