<?php

header("Content-Type: text/plain");

class ShopProduct {
    private $taxrate = 17;

    function calculateTax($price) {
        return (($this->taxrate / 100) * $price);
    }
}

abstract class Service {

}

class UtilityService extends Service {
    private $taxrate = 17;

    function calculateTax($price) {
        return (($this->taxrate / 100) * $price);
    }
}

$p = new ShopProduct();
print $p->calculateTax(100) . "\n";

$u = new UtilityService();
print $u->calculateTax(100) . "\n";

?>