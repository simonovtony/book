<?php

$b = 1;
$c = 0;
$d = 123;

$less = 10 < 5;
$equals = $b == 1;
$between = $b >= 1 && $d;
$x = !($b || $c) && $d;

echo $b . ", " . $c . ", " . $d, "<br>";

var_dump($less);
echo "<br>";
var_dump($equals);
echo "<br>";
var_dump($between);
echo "<br>";
var_dump($x);
echo "<br>";

$x = 3;
$between = $x >= 1 && $x <= 7;
if($between)
    echo "x в нужном диапазоне значений";

?>