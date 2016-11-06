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

class Totalizer {
    static function warnAmount($amt) {
        $count = 0;
        return function($product) use ($amt, &$count) {
            $count += $product->price;
            print " сумма: $count\n";

            if($count > $amt) {
                print " Продано товаров на сумму: {$count}\n";
            }
        };
    }
}

header("Content-Type: text/plain");

$processor = new ProcessSale();
$processor->registerCallback(Totalizer::warnAmount(8));

$processor->sale(new Product("Туфли", 6));
print "\n";
$processor->sale(new Product("Кофе", 6));

?>