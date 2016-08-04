<?php

// bool is_int($var)

$var = 1;
if(is_int($var))
    echo "$var - целое число";
$var = null;
if(is_int($var))
    echo "$var - целое число";
echo "<br>";

// bool is_float($var)

$var = 1.0;
if(is_float($var))
    echo "$var - вещественное число";
$var = null;
if(is_float($var))
    echo "$var - вещественное число";
echo "<br>";

// bool is_string($var)

$var = "some text";
if(is_string($var))
    echo "$var - строка";
$var = null;
if(is_string($var))
    echo "$var - строка";
echo "<br>";

// bool is_numeric($var)

$var = 1.0;
if(is_numeric($var))
    echo "$var - целое или вещественное число";
$var = null;
if(is_numeric($var))
    echo "$var - целое или вещественное число";
echo "<br>";

// bool is_bool($var)

$var = true;
if(is_bool($var))
    echo "$var - логическое значение";
$var = null;
if(is_bool($var))
    echo "$var - логическое значение";
echo "<br>";

// bool is_scalar($var)

$var = true;
$var = 123;
$var = 123.123;
$var = "текст";
if(is_scalar($var))
    echo "$var - простой тип";
$var = null;
if(is_scalar($var))
    echo "$var - простой тип";
echo "<br>";

// bool is_null($var)

$var = null;
if(is_null($var))
    echo "$var - является NULL";
$var = 123;
if(is_null($var))
    echo "$var - является NULL";
echo "<br>";

// bool is_array($var)

$var = array(1, 2 => 123, 3);
if(is_null($var))
    echo "$var - является массивом";
$var = null;
if(is_null($var))
    echo "$var - является массивом";
echo "<br>";

// bool is_object($var)

$var = new stdClass();
if(is_object($var))
    echo "является классом";
$var = null;
if(is_object($var))
    echo "является классом";
echo "<br>";

// string gettype($var)

$var = 123;
echo gettype($var);
echo "<br>";

// bool settype(mixed $var, string $type)

$var = "123";
echo settype($var, "int");
echo "<br>";
var_dump($var);
echo "<br>";


?>
