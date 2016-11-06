<?php

class Product {
    public $name;
    public $price;

    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

class ProcessSale {
    private $callbacks = array();

    function registerCallback($callback) {
        if(!is_callable($callback)) {
            throw new Exception("Функция обратного вызова - невызываемая!");
        }
        $this->callbacks[] = $callback;
    }

    function sale($product) {
        print "{$product->name}: обрабатывается...\n";
        foreach($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }
}

class Mailer {
    function doMail($product) {
        print " Упаковываем: ({$product->name})\n";
    }
}

header("Content-Type: text/plain");

$processor = new ProcessSale();
$processor->registerCallback(array(new Mailer(), "doMail"));

$processor->sale(new Product("Туфли", 6));
print "\n";
$processor->sale(new Product("Кофе", 6));

?>