<?php

require_once "lib/config.php";

require_once "File/Logger.php";

for($n = 0; $n < 10; $n++) {

    $logger = new File_Logger("test$n", "test.log");
    $logger->log("Hello!");
}

//for($n = 0; $n < 10; $n++) {
//
//    $logger = new File_Logger("test$n", "test.log");
//    $logger->log("Hello!");
//    $loggers[] = $logger;
//}

exit();

?>