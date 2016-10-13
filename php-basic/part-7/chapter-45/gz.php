<?php

require_once "lib/config.php";

function ob_saveCookieAfter($s) {
    setcookie("page_size_after", strlen($s));
    return $s;
}

function ob_saveCookieBefore($s) {
    setcookie("page_size_before", strlen($s));
    return $s;
}

ob_start("ob_saveCookieAfter");
ob_start("ob_gzhandler", 9);
ob_start("ob_saveCookieBefore");

?>

<b><?php include("gz.htm") ?></b>

<hr>

<?= file_get_contents("largetextfile.txt") ?>
