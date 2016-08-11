<?php

$str = "Hello, World!";

echo str_replace('World', 'Tony', $str), "<br>";

$st = "1\n2\n3\n";

echo str_replace("\n", "<br>\n", $st), "<br>";

echo str_ireplace('world', 'Tony', $str), "<br>";

echo substr_replace($str, ' My ', 5), "<br>";

echo substr_replace($str, ' My ', 5, 6), "<br>";

echo substr($str, 0, 5) . ' my ' . substr($str, 6, strlen($str));

?>