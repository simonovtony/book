<!DOCTYPE html>
<html>
<body>

<?
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

var_dump($x + $y);
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";
?>

<br>

<?
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2, "<br>";
$txt1 .= $txt2;
echo $txt1, "<br>";
?>

<br>

<?php
$x = true;
$y = false;

echo $x and $y, "<br>";
echo $x or $y, "<br>";
echo $x xor $y, "<br>";
echo $x && $y, "<br>";
echo $x || $y, "<br>";
echo !$x, "<br>";
?>

<br>

<?php
$x = 5;
echo ++$x, "<br>";
echo $x++, "<br>";
echo --$x, "<br>";
echo $x--, "<br>";
?>

<br>

<?
$x = true;
$y = false;

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x <> $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";
var_dump($x >= $y);
echo "<br>";
var_dump($x <= $y);
echo "<br>";
var_dump($x > $y);
echo "<br>";
var_dump($x < $y);
echo "<br>";
?>

<br>

<?php
$x = 10;
$y = 6;

$x = $y;
echo $x, "<br>";
$x += $y;
echo $x, "<br>";
$x -= $y;
echo $x, "<br>";
$x *= $y;
echo $x, "<br>";
$x /= $y;
echo $x, "<br>";
$x %= $y;
echo $x, "<br>";
?>

<br>

<?php
$x = 10;
$y = 6;

echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x % $y;
echo "<br>";
echo $x ** $y;
?>

</body>
</html>