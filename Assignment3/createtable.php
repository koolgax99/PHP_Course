<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "nihar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE assign3 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
country VARCHAR(30) NOT NULL,
state VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table contacts created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>