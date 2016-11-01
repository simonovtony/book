<?php

/*
 * Оператор альтернативы
 */

echo preg_replace('/1|2|3/', '!', '1 2 5'), "<br>";
echo preg_replace('/\.gif$|\.jp?g$/', '.bmp', 'image.jpg'), "<br>";
echo preg_replace('/\.gif$|\.jp?g$/', '.bmp', 'image.gif'), "<br>";
echo preg_replace('#^\w:\/|^\\\\|^/#', 'file:///', 'c:/document/file.txt'), "<br>";

?>