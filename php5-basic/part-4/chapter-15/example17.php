<?php

$text = "matrix has you";

$repl = array(
    "matrix" => "you",
    "you"    => "matrix",
);

echo "str_replace(): " . str_replace(array_keys($repl), array_values($repl), $text) . "<br>";

echo "strtr(): " . strtr($text, $repl);

?>