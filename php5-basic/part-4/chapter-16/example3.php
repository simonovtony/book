<?php

$tools = array(
    "c" => "Alpha",
    "a" => "Zero",
    "d" => "Processor",
    "b" => "Weapon",
);

ksort($tools);

echo "<pre>";
print_r($tools);
echo "</pre>";

/////////////////////////////////////

$tools = array(
    "c" => "Alpha",
    "a" => "Zero",
    "d" => "Processor",
    "b" => "Weapon",
);

krsort($tools);

echo "<pre>";
print_r($tools);
echo "</pre>";

?>