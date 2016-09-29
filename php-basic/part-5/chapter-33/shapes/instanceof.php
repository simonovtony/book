<?php

require_once "Circle.php";

function moveSize($obj) {
    $class = "Shape";
    if(!($obj instanceof $class)) {
        die("Argument 1 must be an instance of $class.<br>");
    }
    if($obj instanceof Circle) {
        // Работаем с классом Circle
    }
    $obj->moveBy(10, 0);
    $obj->resizeBy(10);
}

$shape = new Circle();
moveSize($shape);

?>