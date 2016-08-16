<?php

//$fp = popen("/usr/sbin/sendmail -t -i", "wb");
$fp = popen("c:/xampp/sendmail -t -i", "wb");

fwrite($fp, "From: our script <script@mail.ru>\n");
fwrite($fp, "To: someuser@mail.ru\n");
fwrite($fp, "Subject: here is myself\n");
fwrite($fp, "\n");
fwrite($fp, file_get_contents(__FILE__));

pclose($fp);

echo "Использования канала для отправки по sendmail сделана!";

?>