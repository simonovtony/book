<?php

class Person {

    function getName() {
        return "Иван";
    }

    function getAge() {
        return 44;
    }

    function __toString() {
        $desc = $this->getName();
        $desc .= " (возраст " . $this->getAge() . " лет)";
        return $desc;
    }
}

header("Content-Type: text/plain");

$person = new Person();
print $person;

?>