<!DOCTYPE html>
<html>
<body>

<h1>MySQLi Object</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error)
    die("Conection failed: " . $conn->connect_error);
echo "Connected successfully";
$conn->close();
?>

<h1>MySQLi Procedure</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn)
    die("Connection failed: " . mysqli_connect_error());
echo "Connected successfully";
mysqli_close($conn);
?>

<h1>PDO</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=mysql", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    $conn = null;
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>

</body>
</html>