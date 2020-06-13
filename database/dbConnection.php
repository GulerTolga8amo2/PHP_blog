<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbName = "php_blog";

try {
    $dbConnect = new PDO('mysql:host=' . $servername . ';dbname=' . $dbName . ';', $username, $password);
} catch (PDOException $e) {
    echo "wrong: " . $e->getMessage() . "<br>";
}
