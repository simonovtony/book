<?php

require_once 'mysql_connect.php';

// $r = mysql_list_fields('spoon', 'people');
// $r = mysql_list_tables('spoon');

$r = mysql_query("SHOW DATABASES");
for($tables = array(); $row = mysql_fetch_array($r); $tables[$row[0]] = true);
pre($tables);

$r = mysql_query("SHOW TABLES");
for($tables = array(); $row = mysql_fetch_array($r); $tables[$row[0]] = true);
pre($tables);

//if(!isset($tables['spoon'])) {
//    mysql_query("CREATE TABLE spoon (id INT)");
//    echo "created table!";
//}

$r = mysql_query("DESCRIBE people");
for($tables = array(); $row = mysql_fetch_array($r); $tables[$row[0]] = true);
pre($tables);

?>