<?php

function myErrorHandler($errno, $msg, $file, $line) {
    echo '<div style="border-style: inset; border-width: 2; padding: 5px;">';
    echo "Произошла ошибка с кодом <b>$errno</b>!<br>";
    echo "Файл: <tt>$file</tt>, строка $line.<br>";
    echo "</div>";
}

set_error_handler("myErrorHandler", E_ALL);

filemtime("spoon");

@filemtime("spoon");

restore_error_handler();

filemtime("spoon");

?>