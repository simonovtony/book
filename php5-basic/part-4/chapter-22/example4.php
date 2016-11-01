<?php

echo "date(): " . date("d.m.Y H:i:s", time()), "<br>";
echo "strftime(): " . strftime("%d.%m.%Y %H:%M:%S", time()), "<br>";

echo "<hr>";

echo date("l dS of F Y h:i:s A") . "<br>";
echo date("Сегодня d.m.y") . "<br>";
echo date("Этот файл датирован d.m.Y", filectime(__FILE__));

echo "<hr>";

setlocale(LC_ALL, 'ru_RU.UTF-8');
echo strftime("%B %Y года, %d число. Был %A, часы показали %H:%M."), "<br>";

echo "<hr>";

echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 2005)), "<br>";
echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 2004)), "<br>";
echo date("M-d-Y", mktime(0, 0, 0, 13, 1, 2004)), "<br>";


?>