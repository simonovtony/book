<?php

abstract class DomainObject {
    public static function create() {
        return new static();
    }
}

class User extends DomainObject { }

class Document extends DomainObject { }

header("Content-Type: text/plain");

var_dump(User::create());
var_dump(Document::create());

?>