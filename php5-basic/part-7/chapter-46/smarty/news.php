<?php

require_once "libs/Smarty.class.php";

$Data = array();

$f = fopen("news.txt", "r");

for($i = 0; !feof($f); $i++) {
    $n = trim(fgets($f, 1024));
    if(!$n)
        continue;
    list($date, $text) = preg_split('/\s+/', $n, 2);
    $Data[] = array(
        'date' => $date,
        'text' => $text,
    );
}

$smarty = new Smarty();
$smarty->template_dir = getcwd();
$smarty->compile_dir = "tmp";
$smarty->assign("news", $Data);
$smarty->display("news.tpl");

?>