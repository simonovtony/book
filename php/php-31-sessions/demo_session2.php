<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "Favourite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favourite animal is " . $_SESSION["favanimal"] . ".<br>";
?>

<pre>
<?php
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>
</pre>

</body>
</html>