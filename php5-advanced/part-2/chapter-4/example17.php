<?php

abstract class DomainObject {

}

class User extends DomainObject {
    public static function create() {
        return new User();
    }
}

class Document extends DomainObject {
    public static function create() {
        return new Document();
    }
}

header("Content-Type: text/plain");

var_dump(User::create());
var_dump(Document::create());

?>