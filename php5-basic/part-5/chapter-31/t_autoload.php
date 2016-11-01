<?php

function __autoload($cls) {
    echo "Запрос на загрузку $cls<br>";
}

echo NonExisted::$a;

?>