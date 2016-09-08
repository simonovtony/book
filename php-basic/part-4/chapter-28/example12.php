<?php

require_once 'mysql_connect.php';

$result = mysql_query('SELECT * FROM people');

$fields = mysql_num_fields($result);

$rows = mysql_num_rows($result);

$table = mysql_field_table($result, 0);

echo "Таблица '$table' содержит $fields колонок и $rows строк<br>";
echo "Таблица содержит следующие поля: <br>";

for($i = 0; $i < $fields; $i++) {
    $type = mysql_field_type($result, $i);
    $name = mysql_field_name($result, $i);
    $len = mysql_field_len($result, $i);
    $flags = mysql_field_flags($result, $i);
    echo "$name $type($len) $flags<br>\n";
}

?>