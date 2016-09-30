<?php

echo "Начало программы.<br>";

set_error_handler("handler");

{
    echo "Всё, что имеет начало...<br>";

    trigger_error("Hello!");

    echo "...имеет конец.<br>";
}

echo "Конец программы.<br>";

function handler($num, $str) {
    echo "Ошибка: $str<br>";
    // exit();
}

?>