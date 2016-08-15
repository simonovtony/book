<?php

echo "Создание подкаталга", "<br>";
if(mkdir("my_directory", 0770))
    echo "Создан my_directory", "<br>";
else
    echo "Ошибка создания my_directory", "<br>";
if(mkdir("./my_dir"))
    echo "Создан my_dir", "<br>";
else
    echo "Ошибка создания my_dir", "<br>";
// unix: mkdir("/data")
// windows: mkdir("c:/data")

echo "<hr>";

echo "Удаление my_dir", "<br>";
if(rmdir("./my_dir"))
    echo "Удален my_dir", "<br>";
else
    echo "Ошибка удаления my_dir", "<br>";

echo "<hr>";

echo "Смена или переход по каталогам", "<br>";

@chdir("/tmp/data");
@chdir("./something");
@chdir("something");
@chdir("..");
@chdir("~data"); 

/*
 * unix: ~data = /home/simonovtony/data
 * windows: ~data = c:/users/simonovtony/data
 */

echo "<hr>";

echo "Путь к текущему каталогу", "<br>";
chdir(get_include_path());
echo getcwd(), "<br>";

echo "<hr>";

echo "Открыти, чтение и закрытие каталога " . get_include_path(), "<br>";

$d = opendir(get_include_path());
rewind($d);
while(($e = readdir($d)) !== false) {
    echo $e, "<br>";
}
closedir($d);

?>