<?php

header("Content-Type: text/plain");

class CDProduct {
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct($title, $firstName,
                                $mainName, $price,
                                $playLength) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->playLength = $playLength;
    }

    public function getPlayLength() {
        return $this->playLength;
    }

    public function getSummaryLine() {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName}  )";
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }

    public function getProducer() {
        return "{$this->producerFirstName} "
            .  "{$this->producerMainName}";
    }
}

class BookProduct {
    public $numPages;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct($title, $firstName,
                                $mainName, $price,
                                $numPages) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->numPages = $numPages;
    }

    public function getNumberOfPages() {
        return $this->numPages;
    }

    public function getSummaryLine() {
        $base  = "{$this->title} ( {$this->producerFirstName}, ";
        $base .= "{$this->producerMainName} )";
        $base .= ": {$this->numPages} стр.";
        return $base;
    }

    public function getProducer() {
        return "{$this->producerFirstName} "
            .  "{$this->producerMainName}";
    }
}

class ShopProductWriter {
    public function write($shopProduct) {
        if(!($shopProduct instanceof CDProduct)
        && !($shopProduct instanceof BookProduct)) {
            die("Передан неверный тип данных");
        }
        $str = "{$shopProduct->title}: "
            .    $shopProduct->getProducer()
            ." ({$shopProduct->price})\n";
        return $str;
    }
}

$product1 = new BookProduct("Собачье сердце", "Михаил", "Булгаков", 5.99, 400);
$product2 = new CDProduct("Пропавший без вести", "Группа", "ДДТ", 10.99, 88.0);

$writer = new ShopProductWriter();
print $writer->write($product1);
print $writer->write($product2);

?>