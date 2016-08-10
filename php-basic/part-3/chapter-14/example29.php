<?php

function A($i) {
    echo "Вызвана A($i)\n";
}
function B($i) {
    echo "Вызвана A($i)\n";
}
function C($i) {
    echo "Вызвана A($i)\n";
}

$F = "A";

call_user_func($F, 101);

?>