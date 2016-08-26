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

?>