<?php

/*
 * Незахватывающий поиск
 */

/*
 * Позитивный просмотр вперед
 * (?=подвыражение)
 */

$str = 'gutten <tag>';
$re = '|(\S+)(?=\s*</)|';
preg_match($re, $str, $pockets);
echo "<pre>";
print_r($pockets);
echo "</pre>";

echo "<hr>";

/*
 * Негативный просмотр вперед
 * (?!подвыражение)
 */

$str = 'gutten <tag>';
$re = '
    /
        (?![.,])        # дальше идет НЕ точка и НЕ запятая
        ([[:punct:]]+)  # ... а какая-то другая пунктуация
    /x
';
preg_match($re, $str, $pockets);
echo "<pre>";
print_r($pockets);
echo "</pre>";

echo "<hr>";

/*
 * Позитивный просмотр назад
 * (?<=подвыражение)
 */

$str = 'gutten <tag>';
$re = '
    /
        (?<=<) # слева идет "<" - начало тега...
        (\w+)  # дальше имя тега
    /x
';
preg_match($re, $str, $pockets);
echo "<pre>";
print_r($pockets);
echo "</pre>";

echo "<hr>";

/*
 * Негативный просмотр назад
 * (?<!подвыражение)
 */

$str = 'boobar';
$re = '/(?<!foo)bar/';
preg_match($re, $str, $pockets);
echo "<pre>";
print_r($pockets);
echo "</pre>";

echo "<hr>";

?>