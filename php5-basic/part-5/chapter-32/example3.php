<?php

class Connection
{
    protected $link;
    private $dsn, $username, $password;

    public function __construct($dsn, $username, $password) {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->link = mysql_connect($this->dsn, $this->username, $this->password);
    }

    public function __destruct() {
        if(is_resource($this->link))
            mysql_close($this->link);
    }

    public function __sleep() {
        echo "serialize", "<br>";
        return array('dsn', 'username', 'password');
    }

    public function __wakeup() {
        echo "unserialize", "<br>";
        $this->link = mysql_connect($this->dsn, $this->username, $this->password);
    }
}

$connection = new Connection('localhost', 'root', '');

$data = serialize($connection);

$connection = unserialize($data);


?>