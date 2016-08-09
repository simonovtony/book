<?php

function FCmp($a, $b) {
    return strcmp(strtolower($a), strtolower($b));
}

$riddle = array(
    "g" => "Not",
    "o" => "enough",
    "d" => "ordinariness",
);

uasort($riddle, "FCmp");

echo "<pre>";
var_dump($riddle);
echo "</pre>";

?>