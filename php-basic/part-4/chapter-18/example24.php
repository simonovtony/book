<?php

$f = fopen("file.txt", "r+b");

while(!flock($f, LOCK_EX + LOCK_NB)) {
    echo "Пытаемся получить доступ к файлу <br>";
    sleep(1);
}

fclose($f);

?>