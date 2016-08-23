<?php

$squarers = array();

for($i = 0; $i < 1000; $i++) {
    $id = uniqid("F");
    eval("function $id() { echo $i * $i; }");
    $squarers[] = $id;
}

$squarers[303]();

echo "<hr>";

$mul = create_function('$a,$b', 'return $a * $b;');
$neg = create_function('$a', 'return -$a;');

echo $mul(10, 20) . '<br>';
echo $neg(2) . '<br>';

echo "<hr>";

$fruits = array(
    "orange", "apple", "apricot", "lemon"
);

usort($fruits, create_function('$a, $b', 'return strcmp($b, $a);'));
foreach($fruits as $key => $value)
    echo "$key: $value<br>\n";

?>