<?php

$yep = array("реальность", true);
$nein = array("реальность", "иллюзорна");
if($yep == $nein)
    echo "Два массива равны", "<br>";
if($yep === $nein)
    echo "Два массива эквивалентны", "<br>";

?>