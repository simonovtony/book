<?php

header("Content-Type: text/plain");

class ShopProduct {
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct($title, $firstName, $mainName, $price) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducer() {
        return "{$this->producerFirstName} "
            .  "{$this->producerMainName}";
    }

    public function getSummaryLine() {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
}

class CDProduct extends ShopProduct {
    public $playLength;

    public function __construct($title, $firstName, $mainName, $price, $playLength) {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }

    public function getPlayLength() {
        return $this->playLength;
    }

    public function getSummaryLine() {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }
}

class BookProduct extends ShopProduct {
    public $numPages;

    public function __construct($title, $firstName, $mainName, $price, $numPages) {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    public function getNumberOfPages() {
        return $this->numPages;
    }

    public function getSummaryLine() {
        $base  = parent::getSummaryLine();
        $base .= ": $this->numPages стр.";
        return $base;
    }
}

$product1 = new CDProduct("Собачье сердце", "Михаил", "Булгаков", 5.99, 400);
$product2 = new BookProduct("Пропавший без вести", "Группа", "ДДТ", 10.99, 88.0);

print $product1->getProducer();
print "\n";
print $product2->getProducer();
print "\n";

print "\n";

print $product1->getSummaryLine();
print "\n";
print $product2->getSummaryLine();
print "\n";

?>