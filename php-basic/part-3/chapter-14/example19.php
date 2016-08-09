<?php

function deleter() {
    unset($GLOBALS['a']);
}

$a = 100;
deleter();
echo $a;

?>