<?php

/*
 * Замена совпадений preg_replace
 */

$str = "Hello World!";
$re = '/hello world!/is';
$pl = '<h1>$0</h1>';
$result = preg_replace($re, $pl, $str);
echo $result;

echo "<hr>";

$str = array(
    "text1",
    "text2",
    "text3",
);
$re = '/text/';
$pl = '<h3>\0</h3>';
$result = preg_replace($re, $pl, $str);
foreach($result as $item)
    echo $item, "<br>";

?>