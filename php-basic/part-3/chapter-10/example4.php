<?php

$multiline = "Это текст, начинающийся на одной строке
и продолжающийся на другой,
третьей и т.д.";
echo $multiline, "<br>";

echo 'строка', '<br>';
echo 'д\'Артаньян', '<br>';
echo 'C:\\m2transcript.txt', '<br>';
echo '$multiline', '<br>';

echo "\n строка", "<br>";
echo "\r строка", "<br>";
echo "\t строка", "<br>";
echo "\$ строка", "<br>";
echo "\" строка", "<br>";
echo "\\ строка", "<br>";
echo "\x23 строка", "<br>";

$hello = "Hello";
echo "$hello world!", "<br>";

/* error
$SOME = "Hell";
echo "$SOMEo world!", "<br>";
*/

$SOME = "Hell";
echo $SOME . "o world!", "<br>";
echo "{$SOME}o world!", "<br>";
echo "${SOME}o world!", "<br>";

$action = array(
    "left" => "survive",
    "right" => "kill'em all"
);
echo "Выбранный элемент: {$action['left']}", "<br>";

/* error
echo "Выбранный элемент: {$action[left]}", "<br>";
*/

$name = "Гейтс Билл Иванович";
$text = <<< MARKER
Далее идет какой-то текст,
возможно, с переменными, которые интерполируются:
например, $name будет интерполирована здесь.
MARKER;
echo $text, "<br>";

/* error
echo strip_tags(<<< EOD);
Какой-то текст с <b>тегами</b> - этот пример НЕ работает!
EOD;
*/

$st = `command.com/c dir`;
$st = 'ls -a';
$st = `dir`;
echo "<pre>$st</pre>";

?>