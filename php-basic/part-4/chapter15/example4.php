<?php

$one = 1;
$zero = 0;

if($one == "")
    echo 1, "<br>";
if($zero == "")
    echo 2, "<br>";
if("" == $zero)
    echo 3, "<br>";
if("$zero" == "")
    echo 4, "<br>";
if(strval($zero) == "")
    echo 5, "<br>";
if($zero === "")
    echo 6, "<br>";

?>