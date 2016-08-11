<?php

$text = "Hello,\r\n World!\r\n You \n are \n a developer!";

echo nl2br(str_replace('\r', '', $text));

?>