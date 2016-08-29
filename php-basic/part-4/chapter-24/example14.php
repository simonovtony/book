<?php

/*
 * "Жадность" квантификаторов
 */

$str = "Hello, this <b>word</b> is <b>bold</b>!";
$re = '|<(\w+) [^>]*> (.*) </\1>|xs';
preg_match($re, $str, $pockets);
echo htmlspecialchars("'$pockets[2]' обрамлено тегом '$pockets[1]'"), "<br>";

$str = "Hello, this <b>word</b> is <b>bold</b>!";
echo preg_replace('/<.*?>/s', '', $str), "<br>";

$str = "Hello, this [b]word[/b] is [b]bold[/b]!";
echo preg_replace('|\[b\] (.*?) \[/b\]|ixs', '<b>$1</b>', $str), "<br>";

$str = '[b]жирный текст [b]а тут - еще жирнее[/b] вернулись[/b]';
$to = '<b>$1</b>';
$re1 = '|\[b\] (.*)  \[/b\]|ixs';
$re2 = '|\[b\] (.*?) \[/b\]|ixs';
$result = preg_replace($re1, $to, $str);
echo "Жадная версия: " . htmlspecialchars($result) . "<br>";
$result = preg_replace($re2, $to, $str);
echo "Ленивая версия: " . htmlspecialchars($result) . "<br>";

/*
 * Группировка без захвата
 * (подвыражение)* - без захвата
 * ((подвыражение)*) - с захватом
 * ((?:подвыражение)*) - без захвата   
 */

?>