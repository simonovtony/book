<?php

function debug($var) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

$input = array(
    "a", "b", "c", "d", "e"
);

$output = array_slice($input, 2);
debug($output);

$output = array_slice($input, 2, -1);
debug($output);

$output = array_slice($input, -2, 1);
debug($output);

$output = array_slice($input, 0, 3);
debug($output);

?>