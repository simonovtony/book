<?php

$from = array(
    "{TITLE}", 
    "{BODY}"
);

$to = array(
    "Философия",
    "Представляется логичныим, что сомнение иллюстрирует "
    . "онтологический смысл жизни. Отношение к современности паразительно."
);

echo str_replace($from, $to, "
    <title>{TITLE}</title>
    <body>{BODY}</body>
");

?>