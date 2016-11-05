<?php

class Conf {
    private $file;
    private $xml;
    private $lastmatch;

    function __construct($file) {
        $this->file = $file;
        if(!file_exists($file)) {
            throw new Exception("Файл '$file' не найден'");
        }
        $this->xml = simplexml_load_file($file);
    }

    function write() {
        if(!is_writable($this->file)) {
            throw new Exception("Файл '{$this->file}' недоступен для записи.");
        }
        file_put_contents($this->file, $this->xml->asXML());
    }

    function get($str) {
        $matches = $this->xml->xpath("/conf/item[@name=\"$str\"]");
        if(count($matches)) {
            $this->lastmatch = $matches[0];
            return (string)$matches[0];
        }
        return null;
    }

    function set($key, $value) {
        if(!is_null($this->get($key))) {
            $this->lastmatch[0] = $value;
            return;
        }
        $conf = $this->xml->conf;
        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }
}

header("Content-Type: text/plain");

try {
    $conf = new Conf(dirname(__FILE__) . "/conf01.xml");
    print "user: " . $conf->get('user') . "\n";
    print "host: " . $conf->get('host') . "\n";
    $conf->set("pass", "newpass");
    $conf->write();
} catch (Exception $e) {
    //die($e->__toString());
    die($e);
}

?>