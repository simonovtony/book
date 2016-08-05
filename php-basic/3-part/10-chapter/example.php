<?php

$a = 5;
echo $a, "<br>";

$b = $a;
echo $b, "<br>";

$a = ($b = 10);
$a = $b = 10;
echo $a, "<br>";
echo $b, "<br>";

$a = $b = $c = $d = 1;
$a = 3 * sin($b = $c + 10) + $d;
echo $a, "<br>";

$a = $b = $c = $d = 1;
$b = $c + 10;
$a = 3 * sin($c + 10) + $d;
echo $a, "<br>";

$a = 10 * 20;
$b = "" . (10 * 20);
echo "$a: " . gettype($a), 
 "<br>$b: " . gettype($b);

?>