<?php

/*
 * Модификаторы регулярных выражений
 */

/*
 *  /i - игнорирование регистра
 */
preg_match('/(a+)/i', 'BAaB', $pockets);
echo "<pre>"; 
print_r($pockets); 
echo "<pre>";

echo "<hr>";

/*
 * /x - пропуск пробелов и коментариев
 */
$re = '{
            \[(\w+)\] # открывающий тег
                (.*?) # минимум любых символов
            \[/\1\]   # и закрывающий тег, парный открывающему
       }ixs';

preg_match($re, "[b]bold[/b]", $pockets);
echo "<pre>";
print_r($pockets);
echo "</pre>";

echo "<hr>";

/*
 * /m - многострочность
 *      ^ - начало строки
 *      $ - конец строки
 *      \A - начало данных
 *      \z - конец данных
 */

$str = file_get_contents(__FILE__);
$str = preg_replace('/^/m', "\t", $str);
echo "<pre>" . htmlspecialchars($str) . "</pre>";

echo "<hr>";

/*
 * /s - однострочный поиск
 * preg_match - по умолчанию /m
 * preg_replace - по умолчанию /s
 */

preg_match("/[a-z]*/s", 'asd', $pockets);
echo "<pre>";
print_r($pockets);
echo "</pre>";

echo "<hr>";

/*
 * /e - выполнение PHP-программы при замене
 * используется только при preg_replace
 */

$str = '<b>bold</b>';
$str = preg_replace(
        '{(</?)(\w+)(.*?>)}es',
        "'$1'.strtoupper('$2').'$3'",
        $str
);
echo "<pre>";
echo htmlspecialchars($str);
echo "</pre>";

?>