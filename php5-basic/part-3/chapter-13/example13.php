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

$names["Davis"] = "Don";
$ref = & $dossier["Reeves"]["name"];
$namesList[] = "Paul Doyle";

echo "<pre>";
var_dump($ref);
echo "</pre>";

?>