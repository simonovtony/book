<?php

header("Content-Type: text/plain");

class ShopProduct {
    public $title             = "Стандартный товар";
    public $producerMainName  = "Фамилия автора";
    public $producerFirstName = "Имя автора";
    public $price             = 0;
}

$product1 = new ShopProduct();
$product1->arbitraryAddition = "Дополнительный параметр";

var_dump($product1);

?>