<?php

class Conn
{

    private $dbname = 'csc';
    private $host = 'localhost';
    private $username = 'root';
    private $pass = 'PASSWORD';
    public function connect()
    {


        try {

            $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->pass);
            return $conn;
        } catch (PDOexception $e) {

            echo "Datebase error" . $e->getMessage();
            die();
        }
    }
}
