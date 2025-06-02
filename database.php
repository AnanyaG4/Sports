<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "getit";
$port='5222';

// Connect to MySQL
$conn = new mysqli($servername, $username,"", $dbname,$port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Creating database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    $conn->select_db($dbname);

    // Creating table if it doesn't exist
    $createTable = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) NOT NULL UNIQUE,
        phonenumber INT(11) NOT NULL UNIQUE,
        EmailID VARCHAR(100) NOT NULL UNIQUE,
        Gender ENUM('Male','Female','Other'),
        Age int(11),
        Shippingaddress varchar(50),
        password VARCHAR(255) NOT NULL
    )";

    if ($conn->query($createTable) === FALSE) {
        die("Error creating table: " . $conn->error);
    }
} else {
    die("Error creating database: " . $conn->error);
}
?>