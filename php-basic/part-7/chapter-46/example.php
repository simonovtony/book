<?php

require_once "smarty/libs/Smarty.class.php";

$Data = array();

$bool = true;
$int = 123;
$float = 123.123;
$string = "test";
$array = array(
    0 => 123,
    1 => "test",
);
$object = new stdClass();
$object->int = 123;
$object->string = "test";

$smarty = new Smarty();
$smarty->template_dir = dirname(__DIR__) . '/chapter-46/template_dir';
$smarty->compile_dir = dirname(__DIR__) . '/chapter-46/compile_dir';
$smarty->assign("bool", $bool);
$smarty->assign("int", $int);
$smarty->assign("float", $float);
$smarty->assign("string", $string);
$smarty->assign("array", $array);
$smarty->assign("object", $object);

$smarty->display("example.tpl");

?>