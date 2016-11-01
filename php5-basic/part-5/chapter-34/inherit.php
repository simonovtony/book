<?php

/*
class Exception {
    protected $message;
    protected $code;
    protected $file;
    protected $line;
    private $trace;
    public function __construct($message = "", $code = 0) { }
    public final function getMessage() { }
    public final function getCode() { }
    public final function getFile() { }
    public final function getLine() { }
    public final function getTrace() { }
    public final function getTraceAsString() { }
    public function __toString() { return $this->message; }
}
*/

class FilesystemException extends Exception {

    private $name;

    public function __construct($name) {
        parent::__construct($name);
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

}

class FileNotFoundException extends FilesystemException { }

class FileWriteException extends FilesystemException { }

try {
    if(!file_exists("spoon"))
        throw new FileNotFoundException("spoon");
} catch(FilesystemException $e) {
    echo "Ошибка при работе с файлом '{$e->getName()}'.<br>";
} catch(Exception $e) {
    echo "Другое исключение: {$e->getMessage()}.<br>";
}

?>