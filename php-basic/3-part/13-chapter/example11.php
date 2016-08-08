<?php

$dossier = array(
    "Anderson" => array(
        "name" => "Thomas",
        "born" => "1962-03-11",
    ),
    "Reeves"   => array(
        "name" => "Keanu",
        "born" => "1962-09-02",
    ),
);

echo $dossier["Anderson"]["name"];
echo $dossier["Reeves"]["diff"];

echo "<pre>";
var_dump($dossier);
echo "</pre>";

?>