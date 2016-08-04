<?php

// string print_r(mixed $expression, bool $return = false)

$a = array(
    'a' => 'apple',
    'b' => 'banana',
    'c' => array('x', 'y', 'z')
);

echo "<pre>";
print_r($a);
echo "</pre>";

// string var_dump(mixed $expression, bool $return = false)

echo "<pre>";
var_dump($a);
echo "</pre>";

// string var_export(mixed $expression, bool $return = false)

class SomeClass {
    private $x = 100;
}
$a = array(1, 2, "Hello");
$b = new SomeClass();

echo "<pre>";
var_export($a);
echo "</pre>";

echo "<pre>";
var_export($b);
echo "</pre>";

?>
