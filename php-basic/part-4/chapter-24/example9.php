<?php

/*
 * Квантификаторы повторений
 */

// Ноль или более совпадений
echo preg_replace('/a-*-/', '!', 'a---- a- asz as0'), "<br>";

echo "<hr>";

// Одно или более совпадений
echo preg_replace('/a-+/', '!', 'a--- a- a asz as0'), "<br>";
echo preg_replace('/[a-zA-Z]+-[a-zA-Z]+/', '!', 'Hello-World'), "<br>";
echo "<hr>";

// Ноль или одно совпадение 
echo preg_replace('/[a-zA-Z]+\r?/', '!', "asd\r asd qwe123"), "<br>";
echo "<hr>";

/*
 * Заданное число совпадений
 */

// {n,m} должны быть от 0 до 65 535
echo preg_replace('/X{1,3}/', '!', 'X XX XXX'), "<br>";
echo preg_replace('/X{3}/', '!', 'X XX XXX'), "<br>";
echo preg_replace('/X{2,}/', '!', 'X XX XXX'), "<br>";

?>