<?php

require_once 'mysql_connect.php';

mysql_query("INSERT INTO people(name) VALUES ('Marcus Chong')");
$id = mysql_insert_id();
echo "Вставленное ID: " . $id;

$r = mysql_query("SELECT * FROM people WHERE id=$id");
$row = mysql_fetch_array($r);

pre($row);

$r = mysql_query("SELECT * FROM people");

for($i = 0; $row = mysql_fetch_assoc($r); $i++) {
    echo "$i: {$row['name']}<br>";
}

?>