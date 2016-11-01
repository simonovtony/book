<?php

$namesList[] = "Yuen Wo Ping";
$namesList[] = "Geofrey Darrow";
$namesList[] = "Hugo Weaving";

echo "А вот первый элемент массива: " . $namesList[0] . "<hr>";

for($i = 0; $i < count($namesList); $i++) 
    echo $namesList[$i] . "<br>";

?>