<?php

$tools = array(
    "a" => "Zero",
    "b" => "Weapon",
    "c" => "Alpha",
    "d" => "Processor"
);

asort($tools);

$tools = array_reverse($tools);

echo "<pre>";
print_r($tools);
echo "</pre>";

//////////////////////////////////////////

$tools = array(
    "a" => "Zero",
    "b" => "Weapon",
    "c" => "Alpha",
    "d" => "Processor"
);

asort($tools);

$tools = array_reverse($tools, true);

echo "<pre>";
print_r($tools);
echo "</pre>";

?>