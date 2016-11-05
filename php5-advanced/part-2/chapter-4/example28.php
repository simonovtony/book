<?php

class Address {
    private $number;
    private $street;

    function __construct($maybenumber, $maybestreet = null) {
        if(is_null($maybestreet)) {
            $this->streetaddress = $maybenumber;
        } else {
            $this->number = $maybenumber;
            $this->street = $maybestreet;
        }
    }

    function __invoke($value) {
        var_dump($value);
    }

    function __set($property, $value) {
        if($property === "streetaddress") {
            if(preg_match("/^(\d+.*?)[\s,]+(.+)$/", $value, $matches)) {
                $this->number = $matches[1];
                $this->street = $matches[2];
            } else {
                throw new Exception("Ошибка в адресе: '{$value}");
            }
        }
    }

    function __get($property) {
        if($property === "streetaddress") {
            return $this->number . " " . $this->street;
        }
    }

    // var_export
    function __set_state($array_properties) {
        return $this;
    }

    // var_dump
    function __debugInfo() {
        return $this;
    }
}

header("Content-Type: text/plain");

$address = new Address("441b Bakers Street");
print "Адрес: {$address->streetaddress}\n";

$address = new Address(15, "Albert Mews");
print "Адрес: {$address->streetaddress}\n";

$address->streetaddress = "34, West 24th Avenue";
print "Адрес: {$address->streetaddress}\n";

print_r($address);

$address($address);

?>