<?php

header("Content-Type: text/plain");

class ShopProduct {
    public $title             = "Стандартный товар";
    public $producerMainName  = "Фамилия автора";
    public $producerFirstName = "Имя автора";
    public $price             = 0;

    function getProducer() {
        return "{$this->producerFirstName} "
             . "{$this->producerMainName}";
    }
}

$product1 = new ShopProduct();

$product1->title = "Собачье сердце";
$product1->producerMainName = "Булгаков";
$product1->producerFirstName = "Михаил";
$product1->price = 5.99;

print "Автор: {$product1->getProducer()}\n";

?>