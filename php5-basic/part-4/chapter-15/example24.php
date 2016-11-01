<?php

setlocale(LC_ALL, 'ru_RU.CP1251');

$str = 'антон';

echo strtoupper($str), "<br>";
echo strftime('%D', time()), "<br>";

setlocale(LC_ALL, '');

echo strtoupper($str), "<br>";
echo strftime('%D', time()), "<br>";

?>