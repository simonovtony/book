<?php

function LoadBook($fname) {
    if(!file_exists($fname))
        return array();
    $Book = unserialize(file_get_contents($fname));
    return $Book;
}

function SaveBook($fname, $Book) {
    file_put_contents($fname, serialize($Book));
}

?>