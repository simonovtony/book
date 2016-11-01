<?php

class Father {

    public $children = array();

    function __destruct() {

        echo "Father умер.<br>";
    }
}

class Child {

    public $father;

    function __construct(Father $father) {

        $this->father = $father;
    }

    function __destruct() {

        echo "Child умер.<br>";
    }
}

$father = new Father;

$child = new Child($father);

/*
 * Создает циклические ссылки
 */
$father->children[] = $child;

echo "Пока что все живы... Убиваем всех.<br>";

/*
 * Разрывает кольцевую ссылку
 * $child->father = null;
 */

$father = $child = null;

echo "Все умерли, конец программы.<br>";

?>