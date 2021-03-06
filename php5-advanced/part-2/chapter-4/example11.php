<?php

trait TaxTools {
    function calculateTax($price) {
        return 222;
    }
}

trait PriceUtilities {
    private $taxrate = 17;

    function calculateTax($price) {
        return (($this->taxrate / 100) * $price);
    }
}

abstract class Service {

}

class UtilityService extends Service {
    use PriceUtilities, TaxTools {
        TaxTools::calculateTax insteadof PriceUtilities;
    }
}


header("Content-Type: text/plain");

$u = new UtilityService();
print $u->calculateTax(100) . "\n";

?>