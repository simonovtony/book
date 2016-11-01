<?php

$good = array(
    "Julian Arahanga",
    "Matt Doran",
    "Belinda McClory",
);

$bad = array(
    "Paul Goddard",
    "Robert Taylor",
);

$ugly = array("Client Eastwood");

$all = $good + $bad + $ugly;

echo "<pre>";
print_r($all);
echo "</pre>";

?>