<?php

$native = array("green", "red", "blue");

$colors = array("red", "yellow", "green", "cyan");

$inter = array_unique(array_merge($colors, $native));

echo "<pre>";
print_r($inter);
echo "</pre>";

?>