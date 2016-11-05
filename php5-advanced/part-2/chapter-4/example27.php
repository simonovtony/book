<?php

class Person {
    private $_name;
    private $_age;
    private $writer;

    function __construct(PersonWriter $writer) {
        $this->writer = $writer;
    }

    function __call($methodname, $args) {
        if(method_exists($this->writer, $methodname)) {
            return $this->writer->$methodname($this);
        }
    }

    function __callStatic($methodname, $args) {
        print "Метод: $methodname\n";
        print "Аргументы:\n";
        print_r($args);
    }

    function __get($property) {
        $method = "get{$property}";
        if(method_exists($this, $method)) {
            return $this->$method();
        }
    }

    function __set($property, $value) {
        $method = "set{$property}";
        if(method_exists($this, $method)) {
            return $this->$method($value);
        }
    }

    function __isset($property) {
        $method = "get{$property}";
        return (method_exists($this, $method));
    }

    function __unset($property) {
        $method = "set{$property}";
        if(method_exists($this, $method)) {
            $this->$method(null);
        }
    }

    function setName($name) {
        $this->_name = $name;
        if(!is_null($name)) {
            $this->_name = strtoupper($this->_name);
        }
    }

    function getName() {
        return $this->_name;
    }

    function setAge($age) {
        $this->_age = strtoupper($age);
    }

    function getAge() {
        return $this->_age;
    }
}

class PersonWriter {

    function writeName(Person $p) {
        print $p->getName() . "\n";
    }
    function writeAge(Person $p) {
        print $p->getAge() . "\n";
    }
}

header("Content-Type: text/plain");

$person = new Person(new PersonWriter());
$person->name = "Иван";
$person->age = 44;
if(isset($person->name)) {
    print $person->name . "\n";
}
print $person->age . "\n";
unset($person->name);
print $person->name . "\n";
$person->name = "Иван";
$person->writeName();
$person->writeAge();

Person::someMethod();
Person::someMethod(true, 123, 123.123, 'test', [1,2,3], new stdClass(), function ($item) {
    return null;
});

?>