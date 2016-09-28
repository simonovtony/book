<?php

require_once "lib/config.php";
require_once "Math/Complex2.php";

$a = new Math_Complex2(314, 101);

$x = new Math_Complex2(0, 0);

$y = clone $x;

$y->add($a);

echo "x=", $x, "y=", $y;

?>