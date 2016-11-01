<?php

$sep = getenv("COMSPEC") ? ";" : ":";

ini_set("include_path", dirname(__FILE__) . $sep . ini_get("include_path"));

?>