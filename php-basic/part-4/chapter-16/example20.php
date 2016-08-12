<?php

$a = "Test string";
$b = "Some text";
$A = compact("a", "b");

echo "<pre>";
print_r($A);
echo "</pre>";

////////////////////////////////////////

$a = "Test";
$b = "Text";
$c = "CCC";
$d = "DDD";
$list = array(
    "b", 
    array(
        "c", "d"
    )
);

$A = compact("a", $list);

echo "<pre>";
print_r($list);
echo "</pre>";

?>