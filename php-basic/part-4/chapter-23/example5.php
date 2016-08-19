<?php

$sep = getenv("COMSPEC") ? ";" : ":";
ini_set("include_path", dirname(__FILE__) . $sep . ini_get("include_path"));

require_once "lib/config.php";
require_once "My/Big/Module.php";   // lib/My/Big/Module.php
require_once "My/Other/Module.php"; // lib/My/Other/Module.php

?>