<?php

$array = array(4, 3, "asd", "qwe", 5);

sort($array, SORT_REGULAR);

echo "<pre>";
var_dump($array);
echo "</pre>";

////////////////////////////////////////////////

$array = array(4, 3, 1, 2, 5);

sort($array, SORT_NUMERIC);

echo "<pre>";
var_dump($array);
echo "</pre>";

////////////////////////////////////////////////

$array = array("123", "1", "12", "asd", "qwe");

sort($array, SORT_STRING);

echo "<pre>";
var_dump($array);
echo "</pre>";

?>