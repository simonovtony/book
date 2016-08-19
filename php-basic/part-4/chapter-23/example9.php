<?php

// error

@include "mistake.php";
@myOwnBigFunction();

// good

if(@$_REQUEST['key'])
    echo "key";
$f = @fopen("file.txt", "r");
$ft = @filemtime("file.txt");
$mysql = @mysql_connect("http://localhost", "user", "password");
echo @$result['element']['field'], "<br>";