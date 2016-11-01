<?php

$matrix = array(
    "row1" => array(1, 2, 3),
    "row2" => array(4, 5, 6),
    "row3" => array(7, 8, 9)
);

foreach($matrix as $k => & $v) {
    $v = array(0, 0, 0);
}

echo "<pre>";
var_dump($matrix);
echo "</pre>";

?>