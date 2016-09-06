<?php

include_once "example3.php";
include_once "example5.php";
include_once "example7.php";

$text = "Well, now, ain't this a surprise?";

$tos = array("Пупкин Василий <poupkinne@mail.ru>, Иванов <b@mail.ru>");

$tpl = file_get_contents("mail.eml");

foreach($tos as $to) {
    $mail = $tpl;
    $mail = template("mail.php.eml", array(
        "to" => $to,
        "text" => $text,
    ));
    $mail = mailenc($mail);
    mailx($mail);
}

?>