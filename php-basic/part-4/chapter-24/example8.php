<?php

/*
 * Простые символы
 */
echo preg_replace('/at/s', 'AT', "What is the Perl Compatible Regex?"), "<br>";

$re = "/a\*b/";
echo "<tt>" . htmlspecialchars($re) . "</tt>", "<br>";
$re = "/a\\*b/";
echo "<tt>" . htmlspecialchars($re) . "</tt>", "<br>";

echo "<hr>";

/*
 * Классы символов
 */
echo preg_replace('/a.b/s', '!', 'aqb arb axxb'), "<br>";
echo preg_replace('/\s/s', '!', "Hello World 123\n"), "<br>"; 
echo preg_replace('/\S/s', '!', "Hello World 123\n"), "<br>";
echo preg_replace('/\w/s', '!', "Hello World 123\n"), "<br>";
echo preg_replace('/\W/s', '!', "Hello World 123\n"), "<br>";
echo preg_replace('/\d/s', '!', "Hello World 123\n"), "<br>";
echo preg_replace('/\D/s', '!', "Hello World 123\n"), "<br>";

echo "<hr>";

/*
 * Альтернативы
 */
echo preg_replace('/[a-zA-Z0-9_]/s', '!', "Hello World _ 123\n"), "<br>";
echo preg_replace('/abc[[:alnum:]]+/s', '!', 'abcdef abc___'), "<br>";
echo preg_replace('/abc[[:alnum:][:punct:]0]/', "!", "abca abc0 ab. ab\n"), "<br>";

/*
 * error 
 * preg_replace('/abc[:alnum:]+/', '!', 'abca abcb abc1');
 * альтернативные символы можно использовать только в скобках []
 */
echo preg_replace('/abc[\w.]/', '!', 'abcz abcq abc? abc.'), "<br>";

echo "<hr>";

/*
 * Отрицательные классы
 */
echo preg_replace('/<[^>]+>/', '!', '<html><body></body></html>'), "<br>";


?>