<!DOCTYPE html>
<html>
<body>

<h1>PDO</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBpdo";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql =<<< SQL
DELETE FROM MyGuests
WHERE id = 3
SQL;
    $conn->exec($sql);
    echo "Record deleted successfully";
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
$dbname = "myDBprocedure";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
    die("Connection failed: " . mysqli_connect_error());

$sql =<<< SQL
DELETE FROM MyGuests
WHERE id = 3
SQL;

if(mysqli_query($conn, $sql))
    echo "Record deleted successfully";
else
    "Error: " . $sql . "<br>" . mysqli_error($conn);

mysqli_close($conn);
?>

<h1>MySQLi Object</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBobject";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

$sql =<<< SQL
DELETE FROM MyGuests
WHERE id = 3
SQL;

if($conn->query($sql) === true)
    echo "Record deleted successfully";
else
    echo "Error: " . $sql . "<br>" . $conn->error;

$conn->close();
?>

</body>
</html>