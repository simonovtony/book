<?php

$file = "lock.txt";

fclose(fopen($file, "a+b"));

$f = fopen($file, "r+b") or die("Не могу открыть файл!");

while(true) {
    flock($f, LOCK_EX);
    
    fwrite($f, "Some text.");
    
    fflush($f);
    
    if(flock($f, LOCK_UN)) 
        break;
    
    sleep(10);
}

fclose($f);

echo "LOCK_EX<br>LOCK_UN<br>";

?>