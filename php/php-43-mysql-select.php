<!DOCTYPE html>
<html>
<body>

<h1>PDO</h1>
<?php

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator
{
    function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current()
    {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current() . "</td>";
    }

    function beginChildren()
    {
        echo "<tr>";
    }

    function endChildren()
    {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBpdo";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");

    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as  $k => $v)
    {
        echo $v;
    }
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}

$conn = null;
echo "</table>"

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

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
}
else
{
    echo "0 results";
}

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

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>";
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . " " . $row["lastname"] . "</td></tr>";
    }
}
else
{
    echo "0 results";
}

$conn->close();

?>

</body>
</html>