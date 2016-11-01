<?php

function father($a) {
    echo $a, "<br>";
    function child($b) {
        echo $b + 1, "<br>";
        return $b * $b;
    }
    return $a * $a * child($a);
}

/* error
child(10);
father(30);
*/

father(10);
child(30);

/* error
father(10);
father(10);
*/

?>