<?php

$list[] = "John";
$list[] = "Doe";
$list[] = 30;

list(, $surname, $age) = $list;

echo "$surname, $age.<br>";

?>