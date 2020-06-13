<?php

class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "php_blog";

    public function dbConnection(){
        try {
            $dbConnect = new PDO('mysql:host=' . $this->servername . ';dbname=' . $this->dbName . ';', $this->username, $this->password);
        } catch
        (PDOException $e) {
            echo "wrong: " . $e->getMessage() . "<br>";
        }
    }
}
