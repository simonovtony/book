<?php

/*
 * Ограничители
 * '/path\/to\/file/i'
 */ 
if(preg_match('/path\\/to\\/file/i', "path/to/file"))
    echo "Совпадение";

echo "<hr>";

/*
 * Альтернативные ограничители
 * '/path\\/to\\/file/i' '#path/to/file#i' '"path/to/file"i'
 * '{path/to/file}i'     '[path/to/file]i' '(path/to/file)i'
 */
echo preg_replace('[(/file)[0-9]+]i', '$1', '/file123.txt');

echo "<hr>";

/*
 * Отмена действий спецсимволов
 * '/\\\\filename/' --> /\\filename/
 */

$re = '/\\S+\\\\\\S+/';
echo "<tt>" . htmlspecialchars($re) . "</tt>";

?>