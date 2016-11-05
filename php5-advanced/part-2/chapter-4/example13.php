<?php

trait PriceUtilities {
    private static $taxrate = 17;

    static function calculateTax($price) {
        return ((self::$taxrate / 100) * $price);
    }
}

abstract class Service {

}

class UtilityService extends Service {
    use PriceUtilities;
}

header("Content-Type: text/plain");

$u = new UtilityService();
// print UtilityService::calculateTax(100) . "\n";
print $u::calculateTax(100) . "\n";

?>