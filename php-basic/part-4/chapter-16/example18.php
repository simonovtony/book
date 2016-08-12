<?php

function debug($var) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

$colors = array(
    "red", "green", "blue", "yellow"
);
debug($colors);

$list = array_splice($colors, 2);
debug($list);

$list = array_splice($colors, 1, -1);
debug($list);

$list = array_splice($colors, -1, 1, array("black", "maroon"));
debug($list);

$list = array_splice($colors, 1, count($colors), "orange");
debug($list);

?>