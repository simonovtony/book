<?php

$st = "
    <b>Жирный текст</b>
    <tt>Моноширинный текст</tt>
    <a href='http://www.dklab.ru'>Ссылка</a>
    a<x && y>d
";

echo "Исходный текст: $st";
echo "<hr>После удаления тегов: " . strip_tags($st, "<tt><b>");

?>