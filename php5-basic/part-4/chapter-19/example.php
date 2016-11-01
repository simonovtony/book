<?php

echo "Идентификатор владельца файла: " . fileowner("./file.txt"), "<br>";

echo "Идентификатор группы: " . filegroup("./file.txt"), "<br>";

echo "Права доступа к файлу: " . fileperms("./file.txt"), "<br>";

echo "<hr>";

if(chown("./file.txt", 0))
    echo "file.txt теперь принадлежит root", "<br>";
else 
    echo "У вас недостаточно прав для смены владельца файла!", "<br>";
if(chown("./file.txt", "simonovtony"))
    echo "file.txt теперь опять принадлежит root", "<br>";
else
    echo "У вас недостаточно прав для смены владельца файла!", "<br>";

echo "<hr>";

if(chgrp("./file.txt", 0))
    echo "file.txt теперь принадлежит группе 0", "<br>";
else 
    echo "У вас недостаточно прав для смены кода группы для файла!", "<br>";

echo "<hr>";

if(chmod("./file.txt", 0755))
    echo "file.txt имеет доступ 0755", "<br>";
else
    echo "Нет доступа для смены доступа к файлу", "<br>";

/*
 * r - read
 * w - write
 * x - execute
 * d - приставка каталога
 * User ID (UID) | Group ID (GID) | Other ID
 * rwx           | rwx            | rwx
 * файл     rwxrwxrwx (777)
 * каталог drwxrwxrwx (777)
 * rwx = (4 * 1 + 2 * 1 + 1 * 1) = 7
 * r-x = (4 * 1 + 2 * 0 + 1 * 1) = 5
 * rwxr-xr-x (755)
 */

echo "<hr>";

echo "Информация о файле file.txt", "<br>";
echo "<pre>";
print_r(stat("./file.txt"));
echo "</pre>";

/*
 * 0 - устройство
 * 1 - номер узла inode
 * 2 - атрибуты защиты файла
 * 3 - число синонимов (жесткий ссылок) файла
 * 4 - идентификатор UID владельца
 * 5 - идентификатор GID владельца
 * 6 - тип устройства 
 * 7 - размер файла в байтах
 * 8 - время последнего доступа в секундах, прошедших с 1 января 1970 года
 * 9 - время последней модификации содержимого файла
 * 10 - время последнего изменения атрибутов файла
 * 11 - размер блока
 * 12 - число занятых блоков
 */

echo "Инфомация о ссылке file.txt.lnk", "<br>";
echo "<pre>";
print_r(lstat("./file.txt.lnk"));
echo "</pre>";

echo "<hr>";

echo "Параметры file.txt", "<br>";
echo "Размер файла в байтах: " . filesize("./file.txt"), "<br>";
echo "Время последнего изменения содержимого файла: " . filemtime("./file.txt"), "<br>";
echo "Время последнего доступа к файлу: " . fileatime("./file.txt"), "<br>";
echo "Время последнего изменения атрибутов файла: " . filectime("./file.txt"), "<br>";

echo "<hr>";

echo "Указывает timestanp время модификации файла: " . touch("./file.txt", time() - 1000), "<br>";
echo "Указывает текущее время модификации файла: " . touch("./file.txt"), "<br>";

echo "<hr>";

echo "Тип обьекта файловой системы:", "<br>";
echo "file.txt: " . filetype("./file.txt"), "<br>";
echo "file.txt.lnk: " . filetype("./file.txt.lnk"), "<br>";
echo "dir: " . filetype("./dir"), "<br>";

/*
 * file - обычный файл
 * dir - каталог
 * link - символическая ссылка
 * fifo - FIFO канал
 * block - блочно ориентированное устройство
 * char - символьно ориентиированное устройство
 * unknown - неизвестный тип устройства
 */

echo "<hr>";

echo "Файл? " .    (is_file("file.txt") ? "да" : "нет"), "<br>";
echo "Каталог? " . (is_dir("file.txt")  ? "да" : "нет"), "<br>";
echo "Ссылка? " .  (is_link("file.txt") ? "да" : "нет"), "<br>";

echo "<hr>";

echo "Доступ на чтение? " .     (is_readable("file.txt") ? "да" : "нет"), "<br>";
echo "Доступ на запись? " .     (is_writable("file.txt") ? "да" : "нет"), "<br>";
echo "Доступ на выполнение? " . (is_executable("file.txt") ? "да" : "нет"), "<br>";

echo "<hr>";

echo "Существут file.txt? " . (file_exists("./file.txt") ? "да" : "нет"), "<br>";

echo "<hr>";

echo "Создание символьной ссылки link", "<br>";
@symlink("./file.txt", "./link");
echo "Имя основного файла из ссылки: " . @readlink("./link"), "<br>";

echo "<hr>";

echo "Создание жесткой ссылки link", "<br>";
@link("./file.txt", "./link");
echo "Имя основного файла из ссылки: " . @readlink("./link"), "<br>";

?>