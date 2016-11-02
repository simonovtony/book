<?php

header("Content-Type: text/plain");

class ShopProduct {
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct($title, $firstName,
                             $mainName, $price,
                           $numPages=0, $playLength=0) {
        $this->title             = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName  = $mainName;
        $this->price             = $price;
        $this->numPages          = $numPages;
        $this->playLength        = $playLength;
    }

    public function getProducer() {
        return "{$this->producerFirstName} "
            .  "{$this->producerMainName}";
    }

    public function getSummaryLine() {
        $base  = "$this->title ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
}

class CDProduct extends ShopProduct {
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
    public function getNumberOfPages() {
        return $this->numPages;
    }

    public function getSummaryLine() {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": {$this->numPages} стр.";
        return $base;
    }
}

$product2 = new CDProduct("Пропавший без вести",
                          "Группа", "ДДТ",
                          10.99, null, 60.33);
print "Исполнитель: {$product2->getProducer()}\n";

?>