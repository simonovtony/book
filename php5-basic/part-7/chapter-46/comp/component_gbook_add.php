<?php

define("GBook", "gbook.dat");

require_once "model.php";

if(!empty($_REQUEST['doAdd'])) {
    $tmpBook = LoadBook(GBook);
    $tmpBook = array(
        time() => $_REQUEST['new']
    ) + $tmpBook;
    SaveBook(GBook, $tmpBook);
}

$Data = null;

?>