<?php

header("Content-Type: text/plain");

class ShopProduct {
    public $title             = "Стандартный товар";
    public $producerMainName  = "Фамилия автора";
    public $producerFirstName = "Имя автора";
    public $price             = 0;
}

$product1 = new ShopProduct();
$product2 = new ShopProduct();

$product1->title = "Собачье сердце";
$product2->title = "Ревизор";

var_dump($product1);
var_dump($product2);

?>