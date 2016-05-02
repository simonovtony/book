<!DOCTYPE html>
<html>
<body>

<h1>PDO</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=mysql", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDBpdo";
    $conn->exec($sql);
    echo "Database created successfully<br>";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

<h1>MySQLi Procedure</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn)
    die("Connection failed: " . mysqli_connect_error());

$sql = "CREATE DATABASE myDBprocedure";

if(mysqli_query($conn, $sql))
    echo "Database created successfully";
else
    echo "Error creating database: " . mysqli_error($conn);

mysqli_close($conn);
?>

<h1>MySQLi Object</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

$sql = "CREATE DATABASE myDBobject";

if($conn->query($sql) === true)
    echo "Database created successfully";
else
    echo "Error creating database: " . $conn->error;

$conn->close();
?>

</body>
</html>