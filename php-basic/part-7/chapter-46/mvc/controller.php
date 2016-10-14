<?php

define ("GBook", "gbook.dat");
require_once "model.php";

$Book = LoadBook(GBook);

if(!empty($_REQUEST['doAdd'])) {
    $Book = array(
        time() => $_REQUEST['new']
    ) + $Book;
    SaveBook(GBook, $Book);
}

include "view.htm";

?>