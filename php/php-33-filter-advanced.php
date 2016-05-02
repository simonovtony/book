<!DOCTYPE html>
<html>
<body>

<h1>FILTER CHAR RANGE</h1>
<?php
$str = "<h1>Hello WorldÆØÅ!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>

<h1>FILTER ULR QueryString</h1>
<?php
$url = "http://www.w3schools.com?q=asd";
if(!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false)
    echo "$url is a valid URL";
else
    echo "$url is not a valid URL";
?>

<h1>FILTER IP</h1>
<?php
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
if(!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false)
    echo "$ip is a valid IPv6 address";
else
    echo "$ip is not a valid IPv6 address";
?>

<h1>FILTER INT RANGE</h1>
<?php
$int = 122;
$min = 1;
$max = 200;

if(filter_var($int, FILTER_VALIDATE_INT, array(
    "options" => array(
        "min_range" => $min,
        "max_range" => $max,
    )
)) === false)
{
    echo "Variable value is not within the large range";
}
else
{
    echo "Variable value is within the large range";
}
?>

</body>
</html>