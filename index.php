<?php
// Database connection details
$host = 'localhost';
$db_name = 'skincare';
$username = 'root';
$password = '';

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Logic for listing, adding, and managing skincare products goes here
?>
