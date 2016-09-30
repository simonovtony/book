<?php

function error_handler($errno, $msg, $file, $line) {
    throw new Exception("\nError ID: $errno, Message: $msg, File: $file, Line: $line\n");
}

// register_shutdown_function();
set_error_handler("error_handler");
restore_error_handler();

echo "<hr>";

try {
    throw new Exception("Exception");
} catch (Exception $e) {
    echo "Исключение: {$e->getMessage()}<br>";
}

echo "<hr>";

echo "Не серьезная ошибка", "<br>";
echo $_GET['get'];

echo "Серьезная ошибка", "<br>";
$f = fopen("spoon.txt", "r");
if(!$f)
    return;

?>