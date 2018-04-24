<?php
namespace PHPMVC\LIB;

class DatabaseHandler {
    protected $dsn;
    protected $username;
    protected $password;
    protected $options;
    public static $conn;

    private function setProp() {
        $this->dsn        = "mysql://hostname=localhost;dbname=mvc";
        $this->username   = "root";
        $this->password   = "";
        $this->options    = array(
            \PDO::ATTR_ERRMODE               => \PDO::ERRMODE_EXCEPTION,
            \PDO::MYSQL_ATTR_INIT_COMMAND    => 'SET NAMES UTF8' );
    }
    public function __construct()
    {
        $this->setProp();
        try {
            static::$conn = new \PDO($this->dsn, $this->username, $this->password, $this->options);
        } catch (\PDOException $e) {
            echo "Error connection with database";
        }
    }
}