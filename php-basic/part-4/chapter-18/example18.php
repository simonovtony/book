<?php

$data = "Some text 1.\n" .
        "Some text 2.\n" .
        "Some text 3.";

file_put_contents("file_content.txt", $data);

$data = file_get_contents("file_content.txt");

echo "<pre>";
echo $data;
echo "</pre>";

echo "<hr>";

$data = file_get_contents("image.gif");
echo "file_get_contents", "<br>";
file_put_contents("newimage.gif", $data);
echo "file_put_contents", "<br>";

echo "<hr>";

$meta_tags = get_meta_tags("http://w3schools.com");

echo "<pre>";
print_r($meta_tags);
echo "</pre>";

?>