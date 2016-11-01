<?php

$st = "4597219361|Tomas Anderson|1962-03-11|Текст, содержащий (|)!";

$person = explode("|", $st, 4);

list($id, $name, $burn, $comment) = $person;

echo "$id, $name, $burn, $comment", "<br>";
echo "<br>";

///////////////////////////////////////////////////////////////////////

$st = implode("|", $person);
echo "$st", "<br>";

?>