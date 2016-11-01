<?php

/*
 * Мнимые символы
 */

echo preg_replace('/^asd/', '!', 'asd asd asd'), "<br>";
echo preg_replace('/asd$/', '!', 'asd asd asd'), "<br>";
echo preg_replace('/\basd/', '!', 'asd asdasd asd'), "<br>";
echo preg_replace('/\Basd/', '!', 'asd asdasd asd'), "<br>";

echo preg_replace('/^\w:/', '/', 'c:'), "<br>";
echo preg_replace('/\.txt$/i', '.doc', 'c:/documents/text.txt'), "<br>";
echo preg_replace('/^$/s', 'empty', ''), "<br>";

?>