<?php

function test() {
    global $a;
    $a = 10;
}

test();

echo $a;

?>