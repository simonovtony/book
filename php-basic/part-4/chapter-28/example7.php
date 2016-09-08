<?php

require_once 'mysql_connect.php';

$r = mysql_query('SELECT id - 1 AS number, name as surname FROM people');

$data = array();
while(($row = mysql_fetch_assoc($r)) !== false) {
    $data[] = $row;
}

echo '<pre>';
print_r($data);
echo '</pre>';

?>