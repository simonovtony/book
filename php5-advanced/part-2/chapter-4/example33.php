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

header("Content-Type: text/plain");

// php < 5.3
//$logger = create_function('$product', 'print " Записываем... ({$product->name})\n";');

$logger = function(Product $product) {
    print " Записываем... ({$product->name})\n";
};

//var_dump($logger);

$processor = new ProcessSale();
$processor->registerCallback($logger);

$processor->sale(new Product("Туфли", 6));
print "\n";
$processor->sale(new Product("Кофе", 6));

?>