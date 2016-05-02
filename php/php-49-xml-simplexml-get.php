<!DOCTYPE html>
<html>
<body>

<h1>Simple XML Node Attributes Loop</h1>
<?php

$xml = simplexml_load_file("books.xml");

foreach($xml->children() as $books)
{
    echo $books->title['lang'];
    echo "<br>";
}

?>

<h1>Simple XML Node Attributes</h1>
<?php

$xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");

echo $xml->book[0]['category'] . "<br>";
echo $xml->book[1]->title['lang'] . "<br>";

?>

<h1>Simple XML Node Values</h1>
<?php

$xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");

foreach($xml->children() as $books)
{
    echo $books->title . ", ";
    echo $books->author . ", ";
    echo $books->year . ", ";
    echo $books->price . "<br>";
}

?>

<h1>Simple XML Nodes</h1>
<?php

$xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");

echo $xml->book[0]->title . "<br>";
echo $xml->book[1]->title;

?>

<h1>Simple XML Values</h1>
<?php
$xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");

echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body;
?>

</body>
</html>