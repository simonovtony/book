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

    function __clone() {
        $this->id = 0;
    }
}

header("Content-Type: text/plain");

$person = new Person("Петр", 44);
$person->setId(343);

$person2 = $person;
var_dump($person);
var_dump($person2);

print "\n\n\n";

$person2 = clone $person;
var_dump($person);
var_dump($person2);

?>