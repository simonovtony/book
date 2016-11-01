<?php

$a = array(
    'a' => 10,
    'b' => 20,
);

$b = array(
    'b' => 'new?'
);

$a += $b;

echo "<pre>";
var_dump($a);
echo "</pre>";

////////////////////////////////////

$a = array(
    'a' => 10,
    'b' => 20,
);

$b = array(
    'b' => 'new?'
);

$a = array_merge($a, $b);

echo "<pre>";
var_dump($a);
echo "</pre>";

//////////////////////////////////////

$a = array(
    'a' => 10,
    'b' => 20,
);

$b = array(
    'b' => 'new?'
);

foreach($b as $k => $v) {
    $a[$k] = $v;
}

echo "<pre>";
var_dump($a);
echo "</pre>";

?>