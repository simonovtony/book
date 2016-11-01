<?php

require_once "Circle.php";

$shape = new Circle();

sleep(1);
echo "Прошло некоторое время...<br>";

$shape->moveBy(101, 6);

sleep(1);
echo "Прошло некоторое время...<br>";

$shape->resizeBy(2.0);

sleep(1);
echo "Прошло некоторое время...<br>";

?>