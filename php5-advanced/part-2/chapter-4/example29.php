<?php

class Person {
    private $name;
    private $age;
    private $id;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function setId($id) {
        $this->id = $id;
    }

    function __destruct() {
        if(!empty($this->id))
            print "Сохранение обьекта person\n";
    }
}

header("Content-Type: text/plain");

$person = new Person("Иван", 44);
$person->setId(343);
unset($person);

?>