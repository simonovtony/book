<?php

class AgentSmith {}
$smith = new AgentSmith();
$wesson = new AgentSmith();
if($smith == $wesson) 
    echo "Обьекты равны.", "<br>";
if($smith === $wesson)
    echo "Обьекты эквивалентны.", "<br>";

?>