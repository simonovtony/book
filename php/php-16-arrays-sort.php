<!DOCTYPE html>
<html>
<body>
<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
krsort($age);
foreach($age as $key => $value)
{
    echo "Key = " . $key . ", Value = " . $value;
    echo "<br>";
}
?>
<br>
<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
arsort($age);
foreach($age as $key => $value)
{
    echo "Key = " . $key . ", Value = " . $value;
    echo "<br>";
}
?>
<br>
<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
ksort($age);
foreach($age as $key => $value)
{
    echo "Key = " . $key . ", Value = " . $value;
    echo "<br>";
}
?>
<br>
<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
asort($age);
foreach($age as $key => $value)
{
    echo "Key = " . $key . ", Value = " . $value;
    echo "<br>";
}
?>
<br>
<?php
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
for($i = 0; $i < count($numbers); $i++)
{
    echo $numbers[$i], "<br>";
}
?>
<br>
<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
for($i = 0; $i < count($cars); $i++)
{
    echo $cars[$i], "<br>";
}
?>
<br>
<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
for($i = 0; $i < count($numbers); $i++)
{
    echo $numbers[$i], "<br>";
}
?>
<br>
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
for($i = 0; $i < count($cars); $i++)
{
    echo $cars[$i], "<br>";
}
?>
</body>
</html>
