<?php

echo min(-2, 1, -3, 5, 4), "<br>";
echo min(-2.1, 1.2, -3.3, 5.4, 4.5), "<br>";

echo "<hr>";

echo max(-2, 1, -3, 5, 4), "<br>";
echo max(-2.1, 1.2, -3.3, 5.4, 4.5), "<br>";

echo "<hr>";

$array = array(
    -2, 1, -3, 5, 4
);

echo min($array), "<br>";

echo "<hr>";

$array = array(
    -2.1, 1.2, -3.3, 5.4, 4.5
);

echo max($array), "<br>";

?>