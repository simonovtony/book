<?php

function test() {
    $a = & $GLOBALS['a'];
    $a = 10;
}

test();

echo $a;

?>