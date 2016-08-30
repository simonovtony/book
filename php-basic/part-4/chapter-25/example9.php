<?php

setcookie("arr[0]", "What was said was for you and for you alone.");
setcookie("arr[1][0]", "Whoa, deja vu.");

if(isset($_COOKIE['arr'])) {
    echo "Значение первого элемента cookie: {$_COOKIE['arr'][0]}<br>";
    echo "{$_COOKIE['arr'][1][0]} - What did you just say?";
}

?>