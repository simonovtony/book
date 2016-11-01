<?php

$cls = new ReflectionClass('ReflectionException');

echo "<pre>", $cls, "</pre>";

echo "<pre>";
print_r(Reflection::getModifierNames($cls->getModifiers()));
echo "</pre>";

echo T_FINAL;

?>