<!DOCTYPE html>
<html>
<body>

<h1>XML DOM Looping</h1>
<?php

$xmlDoc = new DOMDocument();

$xmlDoc->load("note.xml");

$x = $xmlDoc->documentElement;

foreach($x->childNodes as $item)
{
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
}

?>

<h1>XML DOM Parser</h1>
<?php

$xmlDoc = new DOMDocument();

$xmlDoc->load("note.xml");

print $xmlDoc->saveXML();

?>

</body>
</html>