<?php

function silly() {
    return array(1, 2, 3);
}

$arr = silly();

echo "<pre>";
var_dump($arr);
echo "</pre>";

list($a, $b, $c) = Silly();

?>