<?php

header('Content-Type: application/json');

$data = [];

$json = json_decode('{
    "date" : "' . date('r') . '"
}');

$data['date'] = $json->date;

$data['bool'] = true;
$data['int'] = 123;
$data['float'] = 123.123;
$data['string'] = "test";
$data['array'] = array(
    0 => 123,
    "test" => "asd",
);
$data['class'] = new stdClass();
$data['class']->key = 'test';
$data['class']->value = 123;

echo json_encode($data /*, bool $objToAssoc = true */);

?>