<?php

$names = array(
    "Joel"   => "Silver",
    "Grant"  => "Hill",
    "Andrew" => "Mason",
);

$list = array_keys($names);

echo "<pre>";
print_r($list);
echo "</pre>";

///////////////////////////////////////

$names = array(
    "Joel"   => "Silver",
    "Grant"  => "Hill",
    "Andrew" => "Mason",
);

$list = array_values($names);

echo "<pre>";
print_r($list);
echo "</pre>";

?>