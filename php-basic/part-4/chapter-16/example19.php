<?php

$array = array(
    1, 2, 3, 4, 5
);

array_push($array, 1000);
$array[] = 1000;

echo "<pre>";
print_r($array);
echo "</pre>";

////////////////////////////////////////

$array = array(
    1, 2, 3, 4, 5
);

echo array_pop($array), "<br>";
echo "<pre>";
print_r($array);
echo "</pre>";

////////////////////////////////////////

$array = array(
    10, "a" => 20, 30
);

array_unshift($array, "!", "?");

echo "<pre>";
print_r($array);
echo "</pre>";

////////////////////////////////////////

$array = array(
    1, 2, 3, 4, 5
);

echo array_shift($array);
echo "<pre>";
print_r($array);
echo "</pre>";

?>