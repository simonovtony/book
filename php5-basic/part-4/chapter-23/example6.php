<?php

error_reporting(E_ALL);

if(!@filemtime("notextst.txt"))
    echo "Файл не существует!", "<br>";

if(!filemtime("notextst.txt"))
    echo "Файл не существует!", "<br>";

$fname = "noteextst.txt";

if(!file_exists($fname) || filemtime($fname) < time() - 60 * 60)
    myFunctionForUpdateFile($fname);

if(@filemtime($fname) < time() - 60 * 60)
    myFunctionForUpdateFile($fname);

?>