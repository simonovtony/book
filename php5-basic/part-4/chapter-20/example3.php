<?php

echo "<pre>";
print_r(glob("c:/windows/*.exe"));
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r(glob("/windows/*", GLOB_ONLYDIR));
echo "</pre>";

/*
 * GLOB_ONLYDIR
 * GLOB_BRACE
 * GLOB_MARK
 * GLOB_NOSORT
 * GLOB_NOCHECK
 * GLOB_NOESCAPE
 */

echo "<hr>";

echo "<pre>";
print_r(glob("c:/windows/*/*.{exe,ini}", GLOB_BRACE));
echo "</pre>";

?>