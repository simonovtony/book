<?php

header("Status: 200 OK");

$dir = dirname($_SERVER['SCRIPT_NAME']);

header("Location: $dir/result.php");
exit;

?>