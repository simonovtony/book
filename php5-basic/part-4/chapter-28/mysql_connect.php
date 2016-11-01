<?php

$user = "root";
$pass = "";
$db = "spoon";

function pre($var) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

mysql_connect("localhost", $user, $pass);

@mysql_query("CREATE DATABASE $db");

mysql_select_db($db) or die("Could not select database: " . mysql_error());

?>