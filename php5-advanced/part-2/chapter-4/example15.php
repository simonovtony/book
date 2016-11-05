<?php

trait PriceUtilities {
    function calculateTax($price) {
        return (($this->getTaxRate() / 100) * $price);
    }

    abstract function getTaxRate();
}

abstract class Service {

}

class UtilityService extends Service {
    use PriceUtilities;
    function getTaxRate() {
        return 17;
    }
}

header("Content-Type: text/plain");

$u = new UtilityService();
print $u->calculateTax(100) . "\n";

?>