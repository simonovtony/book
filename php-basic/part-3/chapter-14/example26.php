<?php

if(!function_exists("virtual")) {
    
    function virtual($uri) {
        $uri = "http://" . $_SERVER["HTTP_HOST"] . $uri;
        echo join("", file($url));
    }
    
}

virtual("/");

?>