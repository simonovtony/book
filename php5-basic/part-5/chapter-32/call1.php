<?php

require_once "lib/config.php";

require_once "Math/Complex1.php";

$a = new Math_Complex1;

$a->re = 314;
$a->im = 101;

$b = new Math_Complex1;

$b->re = 303;
$b->im = 6;

/*
 * error
 * $a->add(5);
 */
$a->add($b);

/*
 * success
 * echo $a;
 */
echo $a->__toString();

?>