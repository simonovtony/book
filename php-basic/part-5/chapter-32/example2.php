<?php

class class1 {
    public function method1() {
        $this->property = 101;
    }
}

$obj1 = new class1();
$obj1->method1();
echo $obj1->property, "<br>";

$obj2 = new class1();
$obj2->property = 303;
echo $obj2->property, "<br>";

$obj3 = new class1();
$key = "test";
$obj3->$key = 314;
echo $obj3->test, "<br>";

/*
 * Ошибка нет такого статической переменной
 * class1::$pass = "ZI0N010I";
 */

echo "<hr>";

class Hotel {

    public $exit;

    public function escape() {

        echo "Let's go through the {$this->exit}!";
    }
}

$theLafayette = new Hotel();
$theLafayette->exit = "main wet all";
$theLafayette->escape();

echo "<hr>";

class Hotel2 {

    private $exit;

    public function escape() {

        $this->findWayOut();
        echo "Let's go through the {$this->exit}!";
    }

    public function lock() {

        $this->exit = null;
    }

    private function findWayOut() {

        $this->exit = "main wet all";
    }
}

$theLafayette = new Hotel2();
/* Ошибка доступ закрыт
 * $theLafayette->findWayOut();
 */
$theLafayette->escape();
/* Ошибка доступ закрыт
 * $theLafayette->exit = "hotel doors";
 */

?>