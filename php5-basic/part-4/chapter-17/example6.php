<?php

echo NAN, "<br>";

echo sqrt(-1), "<br>";

echo 1 + NAN, "<br>";

$number = INF;
var_dump(is_nan($number));
echo "<br>";

$number = NAN;
var_dump(is_nan($number));
echo "<br>";

$number = 123;
var_dump(is_nan($number));
echo "<br>";

$number = "test";
var_dump(@is_nan($number));
echo "<br>";

echo "<hr>";

echo INF, "<br>";

echo +INF, "<br>";

echo -INF, "<br>";

echo 1 / pow(0, -1), "<br>";

$number = INF;
var_dump(is_infinite($number));
echo "<br>";

$number = NAN;
var_dump(is_infinite($number));
echo "<br>";

$number = 123;
var_dump(is_infinite($number));
echo "<br>";

$number = "test";
var_dump(@is_infinite($number));
echo "<br>";

echo "<hr>";

@var_dump(1 / 0);

?>