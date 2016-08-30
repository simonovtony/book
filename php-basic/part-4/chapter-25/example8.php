<?php

$array = isset($_COOKIE['array']) ? unserialize($_COOKIE['array']) : array();

$array[] = mt_rand(0, 100);

setcookie('array', serialize($array));

echo "<pre>";
print_r($array);
echo "</pre>";

?>