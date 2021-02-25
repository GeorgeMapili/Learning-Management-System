<?php

namespace config;

use PDO;
use PDOException;

class Database
{

    private $DB_HOST = "127.0.0.1";
    private $DB_USER = "root";
    private $DB_NAME = "lms";
    private $DB_PASS = "";

    public function connect()
    {
        try {
            $dbconn = new PDO("mysql:host=$this->DB_HOST;dbname=$this->DB_NAME", $this->DB_USER, $this->DB_PASS);
            $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbconn;
        } catch (PDOException $e) {
            die("Connection Failed: " . $e->getMessage());
        }
    }
}
