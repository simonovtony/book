<!DOCTYPE html>
<html>
<body>

<h1>simplexml_load_file</h1>
<?php

$xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");
//echo $xml->to, "<br>";
echo '<pre>';
print_r($xml);
echo '</pre>';

?>

<h1>simplexml_load_string</h1>
<?php

$myXMLData =<<< XML
<?xml version="1.0" encoding="UTF-8" ?>
<note>
    <to>Trove</to>
    <from>Jani</from>
    <heading>Reminder</heading>
    <body>Don't forget me this weekend!</body>
</note>
XML;

$xml = simplexml_load_string($myXMLData) or die("Error: Cannot create object");

echo "<pre>";
print_r($xml);
echo "</pre>";

?>

<h1>XML Error</h1>
<?php

libxml_use_internal_errors(true);

$myXMLData =<<< XML
<?xml version="1.0" encoding="utf-8" ?>
<document>
    <user>John Doe</wronguser>
    <email>john@example.com</wrongemail>
</document>
XML;

$xml = simplexml_load_string($myXMLData);

if($xml === false)
{
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error)
    {
        echo "<br>", $error->message;
    }
}
else
{
    echo "<pre>";
    print_r($xml);
    echo "</pre>";
}

?>

</body>
</html>