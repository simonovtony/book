<?php

/*
 * Замена совпадений preg_replace_callback
 */

function toUpper($pockets) {
    return $pockets[1].strtoupper($pockets[2]).$pockets[3];
}

$str = '<hTmL><bOdY bgcolor="white">Three captains, one ship.</bOdY></html>';

$str = preg_replace_callback('{(</?)(\w+)(.*?>)}s', "toUpper", $str);
echo htmlspecialchars($str);

?>