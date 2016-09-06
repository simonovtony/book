<?php

include_once "example3.php";

$text = "Cookies need love like everything does.";

$tos = array("a@mail.ru", "b@mail.ru");

$tpl = file_get_contents("mail.eml");

foreach($tos as $to) {
    $mail = $tpl;
    $mail = strtr($mail, array(
        "{TO}"   => $tpl,
        "{TEXT}" => $text,
    ));
    
    mailx($mail);
}

?>