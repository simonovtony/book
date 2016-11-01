<?php

$fname = glob("*.{gif,jpg,png}", GLOB_BRACE);

$fname = $fname[mt_rand(0, count($fname) - 1)];

$size = getimagesize($fname);

header("Content-Type: {$size['mime']}");

echo file_get_contents($fname);

?>