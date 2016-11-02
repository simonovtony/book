<?php

header("Content-Type: text/plain");

class AddressManager {
    private $addresses = array(
        "209.131.36.159",
        "74.125.19.106",
    );

    public function outputAddress($resolve) {
        if(is_string($resolve)) {
            $resolve = (preg_match("/false|no|off/i", $resolve)) ?
                false : true;
        }
        foreach($this->addresses as $address) {
            print $address;
            if($resolve) {
                print " (" . gethostbyaddr($address) . ")";
            }
            print "\n";
        }
    }

    /**
     * Вывод списка адресов.
     * Если переменная $resolve содержит истинное значение (true),
     * то адрес преобразуется в эквивалентное имя хоста.
     * @param $resolve Boolean преобразовать адресс?
     */
    public function outputAddressResolve($resolve) {
        if(!is_bool($resolve)) {
            die("Методу outputAddressResolve() требуется булев аргумент\n");
        }
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