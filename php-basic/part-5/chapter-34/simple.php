<?php

echo "Начало программы.<br>";

try {

    echo "Всё что имеет начало...<br>";

    throw new Exception("Hello!");

    echo "...имеет и конец.<br>";

} catch(Exception $e) {

    echo "Исключение: {$e->getMessage()}<br>";

}

echo "Конец программы.<br>";

?>