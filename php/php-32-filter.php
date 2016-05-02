<!DOCTYPE html>
<html>
<body>

<h1>FILTER URL</h1>
<?php
$url = "http://www.w3schools.com";
$url = filter_var($url, FILTER_SANITIZE_URL);
if(!filter_var($url, FILTER_VALIDATE_URL) === false)
    echo "$url is a valid URL";
else
    echo "$url is not a valid URL";
?>

<h1>FILTER EMAIL</h1>
<?php
$email = "john.doe@example.com";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
    echo "$email is a valid email address";
else
    echo "$email is not a valid email address";
?>

<h1>FILTER IP</h1>
<?php
$ip = "127.0.0.1";
if(!filter_var($ip, FILTER_VALIDATE_IP) === false)
    echo "$ip is a valid IP address";
else
    echo "$ip is not a valid IP address";
?>

<h1>FILTER INT</h1>
<?php
$int = 0;
if(filter_var($int, FILTER_VALIDATE_INT) === 0
   || !filter_var($int, FILTER_VALIDATE_INT) === false)
    echo "Integer is valid";
else
    echo "Integer is not valid";
?>

<h1>FILTER SANITIZE STRING</h1>
<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>

<h1>All Filters</h1>
<table>
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>
    <?php
    foreach(filter_list() as $id => $filter)
    {
        echo "<tr><td>" . $filter . "</td><td>" . filter_id($filter) . "</td></tr>";
    }
    ?>
</table>

</body>
</html>