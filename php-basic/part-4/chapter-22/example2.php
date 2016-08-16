<?php

define("START_TIME", microtime(true));

for($i = 0; $i < 1000000; $i++);

printf("Время работы скрипта: %.5f c", microtime(true) - START_TIME);

?>