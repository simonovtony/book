<form action="example6.php">
    <input type="submit" name="doGo" value="Click!">
</form>

<?php

if(isset($_REQUEST['doGo']))
    echo "Вы нажали кнопку!", "<br>";

eval("echo 'Hello World!', '<br>';");

if(@$_REQUEST['doGo'])
    echo "Кнопка нажата!", "<br>";
@list($key, $value) = explode("=", $string);
$f = @fopen("passwords.txt") or die("Не удалось открыть файл!<br>");

?>