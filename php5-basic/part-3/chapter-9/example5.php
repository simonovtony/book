<?php

$programs = array(
    'angel' => 123,
    'some'  => "Текст",
);

var_dump($programs);
echo "<br>";

unset($programs['angel']);

var_dump($programs);

?>
