<?php

function throughTheDoor($which) {
    echo "(get through the $which door)";
}

$func = new ReflectionFunction("throughTheDoor");

$func->invoke("left");

?>