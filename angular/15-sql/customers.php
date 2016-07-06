<?php 

// The following line, in our PHP examples, has been added to allow cross-site access.
header('Access-Control-Allow-Origin: *'); 

header('Conent-Type: application/json; charset=UTF-8');

$conn = new mysqli('localhost', 'root', '', 'northwind');

$result = $conn->query("SELECT CompanyName, City, Country FROM Customers");

$outp = "";

while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if($outp != "") {
        $outp .= ",";
    }
    $outp .= '{"Name":"' . $rs["CompanyName"] . '",';
    $outp .= '"City":"' . $rs["City"] . '",';
    $outp .= '"Country":"' . $rs["Country"] . '"}';
}

$outp = '{"records":[' . $outp . ']}';
$conn->close();

echo $outp;

?>