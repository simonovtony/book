<?php

header("Content-Type: application/xml");

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<root><time>' . date('r') . '</time></root>';

?>