<?php

$months = array(
    1 => "Январь",
    2 => "Февраль",
    12 => "Декабрь",
);

function getMonthName($n) {
    global $months;
    return $months[$n];
}

echo getMonthName(2);

?>