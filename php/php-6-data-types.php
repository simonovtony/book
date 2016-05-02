<!DOCTYPE html>
<html>
<body>

<?php
$x = "Hello World!";
$x = null;
var_dump($x);
?>

<br>

<?php
class Car
{
    function Car()
    {
        $this->model = "VM";
    }
}
$herbie = new Car();
echo $herbie->model;
echo "<br>";
var_dump($herbie);
?>

<br>

<?php
$cars = array("Volvo", "BMW", "Toyota"); // = ["Volvo", "BMW", "Toyota"];
var_dump($cars);
?>

<br>

<?php
$x = true;
$y = false;
?>

<?php
$x = 10.365;
var_dump($x);
?>

<br>

<?php
$x = 5985;
var_dump($x);
?>

<br>

<?php
$x = "Hello World!";
$y = 'Hello World!';
echo $x;
echo "<br>";
echo $y;
?>

</body>
</html>