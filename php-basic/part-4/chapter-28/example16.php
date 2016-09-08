<?php

require_once 'mysql_connect.php';

$name = "!' OR 1=1 OR '!";

//mysql_query("DELETE FROM people WHERE name = '" . addslashes($name) . "'");
mysql_query("DELETE FROM people WHERE name = '" . mysql_real_escape_string($name) . "'");

?>