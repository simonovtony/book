<?php

require_once "JsHttpRequest/JsHttpRequest.php";

$JsHttpRequest = & new JsHttpRequest("UTF-8");

$fileName = $_FILES['file']['name'];
$tmpName = $_FILES['file']['tmp_name'];

$_RESULT = array(
    "name" => $fileName,
    "md5"  => md5(@file_get_contents($tmpName)),
);

?>
<pre><b>Закачанные файлы:</b> <?= print_r($_FILES, true) ?></pre>
