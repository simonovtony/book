<?php

// intval($var)
$b = "123";
$a = intval($b);
$a = (int)$b;
var_dump($a);
echo "<br>";

// floatval($var) or doubleval($var)
$b = "123.123";
$a = floatval($b);
$a = (float)$b;
var_dump($a);
echo "<br>";

// strval($var)
$b = 123;
$a = strval($b);
$a = (string)$b;
var_dump($a);
echo "<br>";

// boolval($var)
$b = 123;
$a = boolval($b);
$a = (bool)$b;
var_dump($a);
echo "<br>";

?>