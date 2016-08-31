<?php

echo "<h1>Первая страница (HTTP):</h1>";
echo file_get_contents("http://php.net");
//echo file_get_contents("http://user:password@php.net/");

echo "<h1>Вторая страница (FTP):</h1>";
echo file_get_contents("ftp://ftp.aha.ru/");
//echo file_get_contents("ftp://user:password@ftp.aha.ru/pub/CPAN/CPAN.html");

?>