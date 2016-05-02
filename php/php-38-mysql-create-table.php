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
CREATE TABLE MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP
)
SQL;
    $conn->exec($sql);
    echo "Table MyGuests created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

<h1>MySQLI Procedure</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBprocedure";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
    die("Connection failed: " . $conn->connect_error);

$sql =<<< SQL
CREATE TABLE MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP
)
SQL;

if(mysqli_query($conn, $sql))
    echo "Table MyGuests created successfully";
else
    echo "Error creating table: " . mysqli_error($conn);

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
CREATE TABLE MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP
)
SQL;

if($conn->query($sql))
    echo "Table MyGuests created successfully";
else
    echo "Error creating table: " . $conn->error;

$conn->close();
?>

</body>
</html>