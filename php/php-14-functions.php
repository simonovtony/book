<!DOCTYPE html>
<html>
<body>

<?
function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";
?>

<br>

<?
function setHeight($minheight = 50)
{
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>

<br>

<?php
function familyName2($fname, $year)
{
    echo "$fname Refsnes. Born in $year <br>";
}

familyName2("Hege", "1975");
familyName2("Stale", "1978");
familyName2("Kai Jim", "1983");
?>

<br>

<?php
function familyName($fname)
{
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>

<br>

<?php
function writeMsg()
{
    echo "Hello world!";
}

writeMsg();
?>

</body>
</html>