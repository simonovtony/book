<!DOCTYPE html>
<html>
<body>

<?php
function myTest3()
{
    static $x = 0;
    echo $x;
    $x++;
}
myTest3();
myTest3();
myTest3();
?>

<br>

<?php
$x = 5;
$y = 10;

function myTest2()
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest2();
echo $y;
?>

<br>

<?php
$x = 5;
$y = 10;

function myTest1()
{
    global $x, $y;
    $y = $x + $y;
}

myTest1();
echo $y;
?>

<br>

<?php
$x = 5;
function myTest()
{
    $x = 5;
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();
echo "<p>Variable x outside function is: $x</p>";
?>

<br>

<?php
$x = 5;
$y = 4;
echo $x + $y;
?>

<br>

<?php
$txt = "W3Schools.com";
echo "I love " . $txt . "!";
?>

<br>

<?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>

<br>

<?php
$txt = "Hello World!";
$x = 5;
$y = 10.5;
echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>

</body>
</html>