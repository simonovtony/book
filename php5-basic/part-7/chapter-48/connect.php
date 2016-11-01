<?php

require_once "DbSimple/Generic.php";

$DATABASE = DbSimple_Generic::connect(
    'mysql://test:test@localhost1/non-existed-db'
);

$DATABASE->setErrorHandler('databaseErrorHandler');

function databaseErrorHandler($message, $info) {
    if(!error_reporting())
        return;
    echo "SQL Error: $message<br><pre>";
    print_r($info);
    echo "</pre>";
    exit();
}

?>