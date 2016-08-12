<?php

$native = array(
    "green", "red", "blue",
);

$colors = array(
    "red", "yellow", "green", "cyan", "black"
);

$inter = array_intersect($colors, $native);

echo "<pre>";
print_r($inter);
echo "</pre>";

?>