<?php

require_once 'mysql_connect.php';

$r = mysql_query("SELECT * FROM people WHERE name != '' ORDER BY id LIMIT 2, 10");

for($data = array(); $item = mysql_fetch_row($r); $data[] = $item);

pre($data);

?>