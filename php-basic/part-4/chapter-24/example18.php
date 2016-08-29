<?php

/*
 * Поиск совпадений preg_match_all
 */

header("Content-type: text/plain");

$flags = array(
    "PREG_PATTERN_ORDER",
    "PREG_SET_ORDER",
    "PREG_SET_ORDER|PREG_OFFSET_CAPTURE",
);

$re = '|<(\w+).*?>(.*?)</\1>|s';

$text = "<b>текст</b> и еще <i>другой текст</i>";

echo "Строка: $text\n";
echo "Выражение: $re\n\n";

foreach($flags as $name) {
    preg_match_all($re, $text, $pockets, eval("return $name;"));
    echo "Фалг: $name:\n";
    print_r($pockets);
    echo "\n";
}

?>