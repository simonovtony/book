<?php

define("PI", 3.1416);

$a = 2.34 * sin(3 * PI / 8) + 5;
echo "Это число PI", "<br>";
echo "Это число " . PI;

// Предопределенные

echo __FILE__, "<br>";
echo __LINE__, "<br>";
echo PHP_VERSION, "<br>";
echo PHP_OS, "<br>";
echo TRUE, "<br>";
echo true, "<br>";
echo FALSE, "<br>";
echo false, "<br>";
echo NULL, "<br>";
echo null, "<br>";

// Определение
// void define(string $name, string $value, bool $case_sens = true)

define("pi", 3.14);
define("str", "Test string");
echo sin(pi/4), "<br>";;
echo str, "<br>";;

// Проверка сушествования
// bool defined(string $name)

if(defined("pi"))
    echo "PI", "<br>";



?>