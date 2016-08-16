<?php

$tmp = tempnam(".", "");

file_put_contents($tmp, "What do you think I am? Human?");

system("commandToExecute < $tmp");

unlink($tmp);

?>