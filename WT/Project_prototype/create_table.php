<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE car_details (
list_number INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
company VARCHAR(30) NOT NULL,
model_name VARCHAR(30) NOT NULL,
type VARCHAR(50),
price VARCHAR(10),
rent INT(10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table car_details created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
