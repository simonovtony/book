<?php

copy("./file.txt", "./file2.txt");
echo "copy";
sleep(3);

echo "<hr>";

rename("./file2.txt", "./newfile.txt");
echo "rename";
sleep(3);

echo "<hr>";

unlink("./newfile.txt");
echo "unlink";
sleep(3);

?>