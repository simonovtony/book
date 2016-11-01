<?php

require_once "lib/config.php";
require_once "Math/Complex2.php";

$className = "Math_Complex2";

$args = array(1, 2);

$class = new ReflectionClass($className);

$obj = $class->newInstance(101, 303);

echo "Первый обьект: $obj<br>";

$obj = call_user_func_array(array(& $class, "newInstance"), $args);

echo "Второй обьект: $obj<br>";

?>