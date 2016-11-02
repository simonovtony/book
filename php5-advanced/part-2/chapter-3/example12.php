<?php

header('Content-Type: text/plain');

class ObjectWriter
{
    function setArray(array $storearray) {
        $this->array = $storearray;
    }

    function setWriter(ObjectWriter $objwriter = null) {
        $this->writer = $objwriter;
    }
}

$obj = new ObjectWriter();
$obj->setArray([1, 2, 3]);
$obj->setWriter($obj);

var_dump($obj);

?>