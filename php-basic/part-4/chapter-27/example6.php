<?php

//header("Content-Transfer-Encoding: base64");

include_once "example3.php";
include_once "example5.php";

$text = "Well, now, ain't this a surprise?";

$tos = array("Пупкин Василий <poupkinne@mail.ru>, Иванов <b@mail.ru>");

$tpl = file_get_contents("mail.eml");

foreach($tos as $to) {
    $mail = $tpl;
    $mail = strtr($mail, array(
        "{TO}" => $to,
        "{TEXT}" => $text,
    ));
    $mail = mailenc($mail);
    mailx($mail);
}

?>