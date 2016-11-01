<?php

$files = array(
    ".",
    "..",
    "documents",
    "games",
    "works",
    "index.php",
    "main.c",
    "game.exe"
);

for($i = 0; $i < count($files); $i++) {
    if($files[$i] == ".")
        continue;
    if($files[$i] == "..")
        continue;
    if(is_dir($files[$i]))
        continue;
    echo "Найден файл: $files[$i]<br>";
}

?>