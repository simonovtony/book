<?php

header("Content-Type: text/plain");

trait IdentityTrait {
    public function generateId() {
        return uniqid();
    }
}

trait PriceUtilities {
    private $taxrate = 17;

    function calculateTax($price) {
        return (($this->taxrate / 100) * $price);
    }
}

class ShopProduct {
    use PriceUtilities, IdentityTrait;
}

abstract class Service {

}

class UtilityService extends Service {
    use PriceUtilities;
}

$p = new ShopProduct();
print $p->calculateTax(100) . "\n";
print $p->generateId() . "\n";

$u = new UtilityService();
print $u->calculateTax(100) . "\n";

?>