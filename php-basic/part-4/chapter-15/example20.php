<?php

$trans = array_flip(get_html_translation_table());

var_dump($trans);

$st = "&lt;br&gt;";

$st = strtr($st, $trans);

var_dump($st);

?>