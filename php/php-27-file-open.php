<!DOCTYPE html>
<html>
<body>

<h1>feof</h1>
<?php
$myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
while(!feof($myFile))
{
    echo fgets($myFile) . "<br>";
}
fclose($myFile);
?>

<h1>fgetc</h1>
<?php
$myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
while(!feof($myFile))
{
    echo fgetc($myFile);
}
fclose($myFile);
?>

<h1>fgets</h1>
<?php
$myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myFile);
fclose($myFile);
?>

<h1>fopen fclose fread filesize</h1>
<?php
$myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myFile, filesize("webdictionary.txt"));
fclose($myFile);
?>

</body>
</html>