<?php

$A = array(
    "a" => "aa",
    "b" => "bb",
    "c" => array(
        "x" => "xx"
    )
);

$st = serialize($A);

echo $st, "<br>";
echo "<br>";

/////////////////////////////////////////

$phone = array(001, 949, 555, 0112);
$save = serialize($phone);
echo $save, "<br>";
$phone = "bogus";
echo count($phone), "<br>";
$phone = unserialize($save);
echo count($phone), "<br>";
echo "<br>";

/////////////////////////////////////////

class Test {
    private $test;
    protected $protect;
    public $show;
}

$test = new Test();

$st = serialize($test);
echo $st, "<br>";

$test = null;
$test = unserialize($st);

echo "<pre>";
var_dump($test);
echo "</pre>";

?>