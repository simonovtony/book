<?php

function getUniques($text, & $nOriginWords = false) {
    $words = preg_split("/([^[:alnum:]]|['-])+/s", $text);
    $nOriginWords = count($words);
    $words = array_map("strtolower", $words);
    $words = array_unique($words);
    return $words;
}

setlocale(LC_ALL, "ru_RU.UTF-8");
$fname = "largetextfile.txt";
$text = file_get_contents($fname);
$uniq = getUniques($text, $nOrig);
echo "Было слов: $nOrig<br>";
echo "Стало слов: " . count($uniq) . "<hr>";
echo join(" ", $uniq);

?>