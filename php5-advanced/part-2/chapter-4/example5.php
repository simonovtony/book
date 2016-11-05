<?php

header("Content-Type: text/plain");

class ShopProduct {
    const AVALIABLE = 0;
    const OUT_OF_STOCK = 1;

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

abstract class ShopProductWriter {
    protected $products = array();

    public function addProduct(ShopProduct $shopProduct) {
        $this->products[] = $shopProduct;
    }

    abstract public function write();
}

class XmlProductWriter extends ShopProductWriter {

    public function write() {
        $writer = new XmlWriter();
        $writer->openMemory();
        $writer->startDocument('1.0', 'UTF-8');
            $writer->startElement("products");
            foreach($this->products as $shopProduct) {
                $writer->startElement("product");
                $writer->writeAttribute("title", $shopProduct->getTitle());
                    $writer->startElement("summary");
                    $writer->text($shopProduct->getSummaryLine());
                    $writer->endElement();
                $writer->endElement();
            }
            $writer->endElement();
        $writer->endDocument();
        print $writer->flush();
    }
}

class TextProductWriter extends ShopProductWriter {

    public function write() {
        $str = "ТОВАРЫ:\n";
        foreach($this->products as $shopProduct) {
            $str .= $shopProduct->getSummaryLine() . "\n";
        }
        print $str;
    }
}

//class AbstractClass {
//    function abstractFunction() {
//        die("AbstractClass::abstractFunction() - абстрактная функция! \n");
//    }
//}

$dsn = "sqlite:C:/xampp/htdocs/book/php5-advanced/part-2/chapter-4/products.db";
$pdo = new PDO($dsn, null, null);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$product1 = ShopProduct::getInstance(1, $pdo);
$product2 = ShopProduct::getInstance(2, $pdo);

//header("Content-Type: text/plain");
//$writer = new TextProductWriter();

header("Content-Type: text/xml");
$writer = new XmlProductWriter();
$writer->addProduct($product1);
$writer->addProduct($product2);
$writer->write();

?>