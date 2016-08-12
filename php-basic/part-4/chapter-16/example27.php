<?php

$input = array(
    "a" => "green",
    "red",
    "b" => "green",
    "blue",
    "red",
);

$result = array_unique($input);

echo "<pre>";
print_r($result);
echo "</pre>";

?>