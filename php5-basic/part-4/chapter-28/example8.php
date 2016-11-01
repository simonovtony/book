<?php

require_once 'mysql_connect.php';

$r = mysql_query('SELECT * FROM people ORDER BY id');

echo "Количество записей: " . mysql_num_rows($r);

?>