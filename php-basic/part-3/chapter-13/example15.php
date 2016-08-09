<?php

$good = array(
    "Arahanga" => "Julian",
    "Doran"    => "Matt",
);

$bad = array(
    "Goddard" => "Paul",
    "Taylor"  => "Robert",
);

$all = $good + $bad;

echo "<pre>";
var_dump($all);
echo "</pre>";

?>