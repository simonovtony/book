<?php

$f = fopen("flush.txt", "wt+");

set_file_buffer($f, 10);

fwrite($f, "12345\n");

fflush($f);

set_file_buffer($f, 0);

fwrite($f, "abcde\n");

fclose($f);

?>