<?php

/*
 * Простые символы
 */
echo preg_replace('/at/', 'AT', "What is the Perl Compatible Regex?"), "<br>";

$re = "/a\*b/";
echo "<tt>" . htmlspecialchars($re) . "</tt>", "<br>";
$re = "/a\\*b/";
echo "<tt>" . htmlspecialchars($re) . "</tt>", "<br>";

?>