<?php

class Orator {

    private $name;

    function __construct($name) {
        $this->name = $name;
        echo "Создан обьект {$this->name}.<br>";
    }

    function __destruct() {
        echo "Уничтожен обьект {$this->name}.<br>";
    }

}

function outer() {
    $obj = new Orator(__FUNCTION__);
    inner();
}

function inner() {
    $obj = new Orator(__METHOD__);
    echo "Внимание, вбрасывание!<br>";
    throw new Exception("Hello!");
}

echo "Начало программы.<br>";

try {
    echo "Начало try-блока.<br>";
    outer();
    echo "Конец try-блока.<br>";
} catch (Exception $e) {
    echo "Исключение: {$e->getMessage()}<br>";
}

echo "Конец программы.<br>";

?>