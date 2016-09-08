<?php

require_once 'mysql_connect.php';

$name = "Paul Goddard";
mysql_query("INSERT INTO table SET name='$name'");
$id = mysql_insert_id();
mysql_query("UPDATE table SET self_id = id WHERE id = $id");

?>