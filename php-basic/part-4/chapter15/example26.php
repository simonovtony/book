<?php

$name = "Tony";
$age = 25;
$percentage = 50;

echo "Привет, $name! Вам $age лет.", "<br>";

printf("Привет, %s! Вам %s лет<br>", $name, $age);

echo sprintf("The percentage was %d%%<br>", $percentage);

?>