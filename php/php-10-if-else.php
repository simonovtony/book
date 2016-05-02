<!DOCTYPE html>
<html>
<body>

<?php
$d = date("H");

if($d < 10)
{
    echo "Have a good morning!";
}
elseif($d < 20)
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}
?>


</body>
</html>