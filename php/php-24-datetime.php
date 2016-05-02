<!DOCTYPE html>
<html>
<body>

<h1>Date Default Timezone Set</h1>
<?php
date_default_timezone_set("Europe/Kiev");
echo "The time is " . date("h:i:sa");
?>

<h1>Date</h1>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
?>

<h1>Time</h1>
<?php
echo date("h:i:sa");
?>

<h1>Make Time</h1>
<?php
$d = mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d H:i:s", $d);
?>

<h1>String to Time</h1>
<?php
$d = strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d = strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d = strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

<h1>Additionally</h1>
<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while($startdate < $enddate)
{
    echo date("M d", $startdate), "<br>";
    $startdate = strtotime("+1 week", $startdate);
}

echo "<br>";

$d1 = strtotime("July 04");
$d2 = ceil(($d1 - time()) / 60/ 60/ 24);
echo "There are " . $d2 . " days until 4th of July.";
?>

<h1>Copyright</h1>
&copy; 2010-<?php echo date("Y"); ?>

</body>
</html>