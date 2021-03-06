<?php

header("Content-Type: text/plain");

class ShopProduct {
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;

    protected $discount;

    public function __construct($title, $firstName, $mainName, $price, $discount = 0) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->discount = $discount;
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

    public function getPrice() {
        return ($this->price - $this->discount);
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
        $base  = parent::getSummaryLine();
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

    public function getPrice() {
        return $this->price;
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