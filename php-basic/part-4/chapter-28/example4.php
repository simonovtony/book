<?php

include_once "mysql_connect.php";

mysql_query('CREATE TABLE people(id INT, name TEXT)')
or die("MySQL error: " . mysql_error());

?>