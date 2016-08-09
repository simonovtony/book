<?php

$namesList = array(
    "Yuen Wo Ping",
    "Geofrey Darrow",
    "Hugo Weaving"
);

for($i = 0; $i < count($namesList); $i++) 
    echo $namesList[$i], "<br>";

/////////////////////////////////////////

for($i = 0; $i < count($namesList); $i++)
    echo "$namesList[$i]\n", "<br>";

?>