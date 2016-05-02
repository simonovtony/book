<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html>
<body>

<?php
if(count($_COOKIE) > 0)
{
    echo "Cookies are enabled. ";
}
else
{
    echo "Cookies are disabled. ";
}
if(!isset($_COOKIE[$cookie_name]))
{
    echo "Cookie named: '" . $cookie_name . "' is not set!";
}
else
{
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
    setcookie("user", "", time() - (86400 * 30), "/");
}
?>

</body>
</html>
