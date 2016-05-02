<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach($age as $x => $x_value)
{
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}
?>

<br>

<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";

echo "<br>";
echo count($age);
?>

<br>

<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++)
{
    echo $cars[$x];
    echo "<br>";
}
?>

<br>

<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . ", " . $cars[2] . ".";

echo "<br>";
echo count($cars);
?>

</body>
</html>