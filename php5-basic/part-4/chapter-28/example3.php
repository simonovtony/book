<?php

$db = "spoon";

echo getenv("COMSPEC");

if(getenv("COMSPEC")) {
    $user = "root";
    $password = "";
} else {
    $user = "выданный хостером";
    $password = "выданный хостером";
}

?>