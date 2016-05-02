<!DOCTYPE html>
<html>
<body>

<h1>fopen fclose fwrite</h1>
<?php
$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

?>
<h1>fopen rewrite</h1>
<?php
$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

</body>
</html>