<?php

require_once "lib/config.php";

require_once "FS.php";

$d = new FS_Directory("C:/windows");
// foreach($d->getIterator() as $path => $entry)
foreach($d as $path => $entry) {
    if($entry instanceof FS_File) {
        echo "<tt>$path</tt>: " . $entry->getSize() . "<br>";
    }
}

echo "<hr>";

$it = $d->getIterator();
for($it->rewind(); $it->valid(); $it->next()) {
    $path  = $it->key();
    $entry = $it->current();
    if($entry instanceof FS_File) {
        echo "<tt>$path</tt>: " . $entry->getSize() . "<br>";
    }
}
unset($it);

?>