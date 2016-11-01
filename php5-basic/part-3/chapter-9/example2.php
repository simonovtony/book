<?php

// integer

$a = 1024;
$b = 0;
$c = -1024;

echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
var_dump($a);
echo "<br>";

// double

$a = 1024.123;
$b = 0.0;
$c = -1024.123;

echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
var_dump($a);
echo "<br>";

// string

$a = "строка";
$b = "строка";

echo $a;
echo "<br>";
echo $b;
echo "<br>";
var_dump($a);
echo "<br>";

// array

$a = array(
    0 => "Нулевой элемент",
    "surname" => "Гейтс",
    "name" => "Билл",
);

echo $a["surname"];
$a["1"] = "Первый элемент";
$a["name"] = "Вильям";

echo "<br>";
echo $a[0];
echo "<br>";
echo $a["1"];
echo "<br>";
echo $a["name"];
echo "<br>";
var_dump($a);
echo "<br>";

// object

class SomeClass {}
$obj = new SomeClass();
$obj->mind = 123;

var_dump($obj);
echo "<br>";

// resource

$r = imagecreate(100, 100);
var_dump($r);
echo "<br>";

// bool

$b = true;
echo $b;
echo "<br>";
$b = false;
echo $b;
echo "<br>";
var_dump($b);
echo "<br>";

// null

$n = null;
var_dump($n);

?>