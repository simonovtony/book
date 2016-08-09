<?php

$a = 10;
$b = & $a;
$b = 0;
echo "b = $b, a = $a";
echo "<br>";

$A = array(
    'ресторан' => 'Китайский сюрприз',
    'девиз'    => 'Nosce te computerus.'
);

$r = & $A['ресторан'];
$r = "Восход луны";
echo $A['ресторан'];
echo "<br>";

unset($r);
echo $A['ресторан'];
echo "<br>";
$r = 123;
echo $r;
echo "<br>";

$right = "красная";
$wrong = "синяя";
$color = "right";
echo $$color, "<br>";
$$color = "несиняя";
echo $right, "<br>";

// Условные обозначения

/*
 * <return_type> FuncName(<type1> $param1 [,<type2> $param2]>
 * 
 */

// Возвращаемые типы

/*
 * string
 * int, long
 * float, double
 * bool
 * array
 * list
 * object
 * void
 * mixed
 * resource
 */

?>
