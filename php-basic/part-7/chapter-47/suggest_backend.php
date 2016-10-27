<?php

require_once "JsHttpRequest/JsHttpRequest.php";

$JsHttpRequest = & new JsHttpRequest("utf-8");

$str = $_REQUEST['str'];
$num = $_REQUEST['num'];

$textFile = file_get_contents('largetextfile.txt');
$words = preg_split('/[^\w+]/s', $textFile);
$words = array_unique($words);

$found = array();
foreach($words as $word) {
    if(strlen($str) && 0 === stripos($word, $str)) {
        $found[] = $word;
    }
    if(count($found) >= $num)
        break;
}

//$JsHttpRequest->RESULT = array(
//    "str"  => $str,
//    "list" => $found,
//);

global $_RESULT;
$_RESULT = array(
    "str"  => $str,
    "list" => $found,
);

echo sprintf("Произведена выборка %d из %d слов.", count($found), count($words));

?>