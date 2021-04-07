<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "blog";

try {

    $conn = new PDO("mysql:host=$servername;dbname=" . $dbName, $username, $password);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}