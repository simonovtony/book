<?php

class Test {
    function Test($msg) {
        echo "Вызван конструктор: $msg.<br>";
    }
}

$obj = new Test("hello");

?>