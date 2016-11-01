<?php

echo "Список определенных переменных:<br>";
echo "<pre>";
print_r(get_defined_vars());
echo "</pre>";

echo "<hr>";

echo "Список определенных функций:<br>";
echo "<pre>";
print_r(get_defined_functions());
echo "</pre>";

echo "<hr>";

echo "Список определенных констант:<br>";
echo "<pre>";
print_r(get_defined_constants());
echo "</pre>";

echo "<hr>";

echo "Список определенных классов:<br>";
echo "<pre>";
print_r(get_declared_classes());
echo "</pre>";

echo "<hr>";

echo "Список определенных интерфейсов:<br>";
echo "<pre>";
print_r(get_declared_interfaces());
echo "</pre>";

echo "<hr>";

echo "Список определенных трейтов:<br>";
echo "<pre>";
print_r(get_declared_traits());
echo "</pre>";

?>