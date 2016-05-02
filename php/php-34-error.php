<!DOCTYPE html>
<html>
<body>

<h1>Example Error</h1>
<?php
function customError2($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Webmaster has been notified";
    error_log("Error: [$errno] $errstr", 1, "someone@example.com", "From: webmaster@example.com");
}
set_error_handler("customError2", E_USER_ERROR);
$test = 2;
if($test > 1)
    trigger_error("Value must be 1 or below", E_USER_ERROR);
?>


<h1>Triger Error</h1>
<?php
$test = 2;
if($test > 1)
    trigger_error("Value must be 1 or below");
?>

<h1>Set Error Handler</h1>
<?php
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Ending Script";
    //die();
}
set_error_handler("customError");
$test = new stdClass();
echo $test;
?>

<h1>Fix error</h1>
<?php
if(!file_exists("welcome.txt"))
{
    die("File not found");
}
else
{
    $file = fopen("welcome.txt", "r");
}
?>

</body>
</html>