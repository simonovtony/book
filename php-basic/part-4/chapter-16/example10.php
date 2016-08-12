<?php

function fCmp($a, $b) {
    return strcmp($a, $b);
}

$tools = array(
    "One", 
    "Two",
    "Three",
    "Four",
);

usort($tools, "fCmp");

echo "<pre>";
print_r($tools);
echo "</pre>";

?>