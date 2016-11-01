<?php

/*
 * Карманы
 */

$str = " 15-16/2000       ";
$re = '
    /
        ^\s*(
            (\d+)
            \s* [[:punct:]] \s*
            (\d+)
            \s* [[:punct:]] \s*
            (\d+)
        )\s*$
    /xs
      ';

preg_match($re, $str, $pockets) or die("Not a date: $str");

echo "Дата без пробелов: '$pockets[1]' <br>";
echo "День: $pockets[2] <br>";
echo "Месяц: $pockets[3] <br>";
echo "Год: $pockets[4] <br>";

echo "<hr>";

/*
 * Использование карманов в функции замены
 */

$text = htmlspecialchars(file_get_contents(__FILE__));
// $1 или \1 или \\1
$html = preg_replace('/(\$[a-z]\w*)/is', "<b>$1</b>", $text);
echo "<pre>$html</pre>";

echo "<hr>";

/*
 * Использование карманов в функции сопоставления 
 */

$str = "Hello, this <b>world</b> is bold!";
$re = '|<(\w+) [^>]* > (.*?) </\1>|xs';
preg_match($re, $str, $pockets) or die("Нет тегов.");
echo htmlspecialchars("'$pockets[2]' обрамлено тегом '$pockets[1]'");

?>