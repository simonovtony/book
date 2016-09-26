<?php

require_once "lib/config.php";

require_once "Math/Complex.php";
require_once "Math/Complex2.php";

$number = 10.4;
echo "<pre>";
print_r($number);
echo "</pre>";

$str = "Some string";
echo "<pre>";
print_r($str);
echo "</pre>";

$arr = array(1, 2, 3);
echo "<pre>";
print_r($arr);
echo "</pre>";

$obj = new Math_Complex;
echo "<pre>";
print_r($obj);
echo "</pre>";

echo "<hr>";

$obj = new Math_Complex;

$obj->re = 6;
$obj->im = 101;

echo "<pre>";
print_r($obj);
echo "</pre>";

echo "<hr>";

$a = new Math_Complex2;
echo "<pre>";
print_r($a);
echo "</pre>";
$a = new Math_Complex2();
echo "<pre>";
print_r($a);
echo "</pre>";
$a = new Math_Complex2(101);
echo "<pre>";
print_r($a);
echo "</pre>";
$a = new Math_Complex2(101, 303);
echo "<pre>";
print_r($a);
echo "</pre>";

?>