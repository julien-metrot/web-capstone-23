<?php
class Database {
    private $host = DB_HOST;
    private $port = DB_PORT;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    private $dbh; // database handler - a string containing the host, port, and database name
    private $stmt; // SQL statement or call to stored procedure
    private $error; // error message

    public function __construct() {
        $dsn = "mysql:host=" . $this->host .
            ";port=" . $this->port .
            ";dbname=" . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//            PDO::MYSQL_ATTR_SSL_CA => openssl_get_cert_locations()['ini_cafile'], // Comment for localhost phpmyadmin
            PDO::MYSQL_ATTR_SSL_CA => URLROOT . "/certs/curl-ca-bundle.crt"
        );

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
            echo "<h1>Successfully connected!</h1>";
        } catch(PDOException $e) {
            $this->error = $e->getMessage();
            die("Connection failed: " . $this->error);
        }
    }

    public function query($sql) {
        $this->stmt = $this->dbh->prepare($sql);
    }

    public function bind($param, $value, $type = null) {
        if(is_null($type)) {
            if(is_int($value)) {
                $type = PDO::PARAM_INT;
            } else if(is_bool($value)) {
                $type = PDO::PARAM_BOOL;
            } else if(is_null($value)) {
                $type = PDO::PARAM_NULL;
            } else {
                $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() {
        return $this->stmt->execute();
    }


}