<?php

$birth = array(
    "Thomas Anderson" => "1962-03-11",
    "Keanu Reeves"    => "1962-09-02",
);

for(reset($birth); list($k, $v) = each($birth); )
    echo "$k родился $v", "<br>";
echo "<br>";

/////////////////////////////////////////////////

foreach($birth as $k => $v)
    echo "$k родился $v", "<br>";
echo "<br>";

////////////////////////////////////////////////

foreach(array(101, 314, 606) as $magic)
    echo "На стене было написано: $magic.<br>";
echo "<br>";

////////////////////////////////////////////////

$numbers = array(100, 313, 605);

foreach($numbers as $v)
    $v++;
echo "Элементы массива: ";
foreach($numbers as $elt)
    echo "$elt ";
echo "<br>";

////////////////////////////////////////////////

$numbers = array(100, 313, 605);
foreach($numbers as & $v)
    $v++;
echo "Элементы массива: ";
foreach($numbers as $elt)
    echo "$elt ";
echo "<br>";

?>