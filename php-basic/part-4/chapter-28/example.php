<?php

$mysql = mysql_connect('localhost', 'root', '');

echo "Номер ошибки: " . mysql_errno($mysql), "<br>";
echo "Текст ошибки: " . mysql_error($mysql), "<br>";

mysql_select_db('test', $mysql);

$result = mysql_query("SELECT * FROM music WHERE title='Going Under'", $mysql);

mysql_close($mysql);

?>