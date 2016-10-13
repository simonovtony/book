<?php

function ob_linerize($text) {
    return preg_replace('/[\r\n\s]+/s', ' ', trim($text));
}

ob_start("ob_linerize");

echo htmlspecialchars(file_get_contents(__FILE__));

?>