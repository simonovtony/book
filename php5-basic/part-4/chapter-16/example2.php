<?php

$tools = array(
    "a" => "Zero",
    "b" => "Weapon",
    "c" => "Alpha",
    "d" => "Processor"
);

asort($tools);

echo "<pre>";
print_r($tools);
echo "</pre>";

////////////////////////////////////////

$tools = array(
    "a" => "Zero",
    "b" => "Weapon",
    "c" => "Alpha",
    "d" => "Processor"
);

arsort($tools);

echo "<pre>";
print_r($tools);
echo "</pre>";

?>