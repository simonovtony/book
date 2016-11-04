<?php

header("Content-Type: text/plain");

class ShopProduct {
    private $id;
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;
    private $discount = 0;

    public function __construct($title, $firstName, $mainName, $price) {
        $this->title             = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName  = $mainName;
        $this->price             = $price;
    }

    public function setID($id) {
        $this->id = $id;
    }

    public static function getInstance($id, PDO $pdo) {
        $stmt = $pdo->prepare("
            SELECT *
            FROM products
            WHERE id = ?
        ");
        $result = $stmt->execute(array($id));

        $row = $stmt->fetch();

        if(empty($row)) {
            return null;
        }

        if($row['type'] === "book") {
            $product = new BookProduct(
                $row['title'], $row['firstname'],
                $row['mainname'], $row['price'],
                $row['numpages']
            );
        } else if($row['type'] === "cd") {
            $product = new CDProduct(
                $row['title'], $row['firstname'],
                $row['mainname'], $row['price'],
                $row['playlength']
            );
        } else {
            $product = new ShopProduct(
                $row['title'], $row['firstname'],
                $row['mainname'], $row['price']
            );
        }
        $product->setID($row['id']);
        $product->setDiscount($row['discount']);
        return $product;
    }

    public function getProducerFirstName() {
        return $this->producerFirstName;
    }

    public function getProducerMainName() {
        return $this->producerMainName;
    }

    public function setDiscount($num) {
        $this->discount = $num;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPrice() {
        return ($this->price - $this->discount);
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
    private $playLength = 0;

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
    private $numPages = 0;

    public function __construct($title, $firstName, $mainName, $price, $numPages) {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    public function getNumberOfPages() {
        return $this->numPages;
    }

    public function getSummaryLine() {
        $base  = parent::getSummaryLine();
        $base .= ": {$this->numPages} стр.";
        return $base;
    }

    public function getPrice() {
        return $this->price;
    }
}

// $dsn = "sqlite://home/bob/projects/products.db
$dsn = 'sqlite:c:/xampp/htdocs/book/php5-advanced/part-2/chapter-4/products.db';
$pdo = new PDO($dsn, null, null);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$obj = ShopProduct::getInstance(1, $pdo);

var_dump($obj);

?>