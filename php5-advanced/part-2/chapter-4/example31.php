<?php

class Account {
    public $balance;

    function __construct($balance) {
        $this->balance = $balance;
    }
}

class Person {
    private $name;
    private $age;
    private $id;
    public $account;

    function __construct($name, $age, Account $account) {
        $this->name = $name;
        $this->age = $age;
        $this->account = $account;
    }

    function setId($id) {
        $this->id = $id;
    }

    function __clone() {
        $this->id = 0;
        // Клонирует класс Account
        $this->account = clone $this->account;
    }
}

header("Content-Type: text/plain");

$person = new Person("Иван", 44, new Account(200));
$person->setId(343);
$person2 = clone $person;
$person->account->balance += 10;
print $person2->account->balance;

?>