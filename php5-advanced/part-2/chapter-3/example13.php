<?php

header("Content-Type: text/plain");

class ShopProduct {
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public $type;

    public function __construct($title     , $firstName,
                                $mainName  , $price,
                                $numPages=0, $playLength=0) {
        $this->title             = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName  = $mainName;
        $this->price             = $price;
        $this->numPages          = $numPages;
        $this->playLength        = $playLength;

        if($this->numPages > 0)
            $this->type = "book";
        if($this->playLength > 0)
            $this->type = "cd";
    }

    public function getNumberOfPages() {
        return $this->numPages;
    }

    public function getPlayLength() {
        return $this->playLength;
    }

    public function getProducer() {
        return "{$this->producerFirstName} "
            .  "{$this->producerMainName}";
    }

    public function getSummaryLine() {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        if ($this->type == 'book') {
            $base .= ": {$this->numPages} стр.";
        } else if ($this->type == 'cd') {
            $base .= ": Время звучания - {$this->playLength}";
        }
        return $base;
    }
}

$product1 = new ShopProduct("Собачье сердце", "Михаил", "Булгаков", 5.99, 400, 0);
$product2 = new ShopProduct("Пропавший без вести", "Группа", "ДДТ", 10.99, 0, 88.0);

print $product1->getSummaryLine();
print "\n";
print $product2->getSummaryLine();

?>