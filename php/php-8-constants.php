<!DOCTYPE html>
<html>
<body>
<?php
define("GREETING2", "Welcome to W3Schools.com!");
function myTest()
{
    echo GREETING2;
}
myTest();
?>
<br>
<?php
define("GREETING1", "Welcome to W3Schools.com!", true);
echo greeting1;
?>
<br>
<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>
</body>
</html>