<!DOCTYPE html>
<html>
<body>

<h1>$_GET</h1>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?subject=PHP&web=W3Schools.com">Test $GET</a>
<br>
<?php
if(!empty($_GET['subject']) && !empty($_GET['web']))
    echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>

<h1>$_POST</h1>
<form method="post"
      action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text"
                 name="fname">
    <input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["fname"];
    if(empty($name))
        echo "Name is empty";
    else
        echo $name;
}
?>


<h1>$_REQUEST</h1>
<form method="post"
      action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text"
                 name="fname">
    <input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_REQUEST["fname"];
    if(empty($name))
        echo "Name is empty";
    else
        echo $name;
}
?>

<h1>$_SERVER</h1>
<?php
echo '$_SERVER["PHP_SELF"] = ' . $_SERVER["PHP_SELF"];
echo "<br>";
echo '$_SERVER["SERVER_NAME"] = ' . $_SERVER["SERVER_NAME"];
echo "<br>";
echo '$_SERVER["HTTP_HOST"] = ' . $_SERVER["HTTP_HOST"];
echo "<br>";
echo '$_SERVER["HTTP_REFER"] = ' . @$_SERVER["HTTP_REFER"];
echo "<br>";
echo '$_SERVER["HTTP_USER_AGENT"] = ' . $_SERVER["HTTP_USER_AGENT"];
echo "<br>";
echo '$_SERVER["SCRIPT_NAME"] = ' . $_SERVER["SCRIPT_NAME"];
?>

<h1>$GLOBALS</h1>
<?php
$x = 75;
$y = 25;

function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>

</body>
</html>