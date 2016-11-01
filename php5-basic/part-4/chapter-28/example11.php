<?php

require_once 'mysql_connect.php';

$r = mysql_query("SELECT * FROM people");
//$r = mysql_query("SELECT COUNT(*) FROM people");

echo "Число строк в таблице: " . mysql_result($r, 0, 0), "<br>";
echo "Имя ячейки: " . mysql_field_name($r, 0), "<br>";
echo "Тип ячейки: " . mysql_field_type($r, 0), "<br>";
echo "Длина ячейки: " . mysql_field_len($r, 0), "<br>";
echo "Флаги ячейки: " . mysql_field_flags($r, 0), "<br>";
echo "Имя таблицы: " . mysql_field_table($r, 0), "<br>";

?>