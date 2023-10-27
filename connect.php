<?php
$servername = "localhost";
$username = "fsd4"; // Your MySQL username
$password = "fsd4"; // Your MySQL password
$dbname = "crudoperation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>