<?php

header("Content-type: text/plain");

$spec = array(
    0 => array("pipe", "r"), // stdin
    1 => array("pipe", "w"), // stdout
    // 2 => array("file", "/tmp/error-output.txt", "a") // stderr
    2 => array("file", "c:/xampp/tmp/error-output.txt", "a") // stderr
);

//$proc = proc_open("cat", $spec, $pipes);
$proc = proc_open("type", $spec, $pipes);

for($i = 0; $i < 100; $i++)
    fwrite($pipes[0], "Hello World #$i!\n");
fclose($pipes[0]);

while(!feof($pipes[1]))
    echo fgets($pipes[1], 1024);
fclose($pipes[1]);

proc_close($proc);

echo "Использование каналов используя proc_open и proc_close успешно!";

?>