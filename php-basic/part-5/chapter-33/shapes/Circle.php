<?php

require_once "ShapeA.php";

class Circle extends Shape {
    private $radius;

    public function __construct($radius = 100) {
        $this->radius = $radius;
        parent::__construct();
    }

    public function show() {
        list($x, $y) = $this->getCoord();
        $radius = $this->radius * $this->getScale();
        echo "Рисуем круг: ($x, $y, $radius)<br>";
    }

    public function hide() {
        list($x, $y) = $this->getCoord();
        $radius = $this->radius * $this->getScale();
        echo "Стираем круг: ($x, $y, $radius)<br>";
    }
}

?>