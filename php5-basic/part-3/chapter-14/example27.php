<?php

function A($i) {
    echo "Вызвана A($i)\n";
}
function B($i) {
    echo "Вызвана B($i)\n";
}
function C($i) {
    echo "Вызвана C($i)\n";
}

$F = "A";

$F(303);

?>