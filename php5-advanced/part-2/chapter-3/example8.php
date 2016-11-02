<?php

header("Content-Type: text/plain");

class AddressManager {
    private $addresses = array(
        "209.131.36.159",
        "74.125.19.106",
    );

    public function outputAddress($resolve) {
        foreach($this->addresses as $address) {
            print $address;
            if($resolve) {
                print " (" . gethostbyaddr($address) . ")";
            }
            print "\n";
        }
    }
}

$settings = simplexml_load_file("settings.xml");
$manager = new AddressManager();
$manager->outputAddress((string)$settings->resolvedomains);

?>