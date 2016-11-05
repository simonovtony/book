<?php

interface IdentityObject {
    public function generateId();
}

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

class ShopProduct implements IdentityObject {
    use PriceUtilities, IdentityTrait;
}

function storeIdentityObject(IdentityObject $idobj) {
    print "Работа с обьектом типа IdentityObject: {$idobj->generateId()}\n";
}

header("Content-Type: text/plain");

$p = new ShopProduct();
storeIdentityObject($p);

?>