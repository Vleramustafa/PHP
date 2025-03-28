<?php
// Database configuration
$servername = "localhost";  // Database server name (often localhost)
$username = "root";         // Database username
$password = "";             // Database password (empty for local development)
$dbname = "pp"; // Database name

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  // If connection fails, display an error message
}

// Optional: Set the character set for the connection (ensure UTF-8 encoding)
$conn->set_charset("utf8");

// You can add more configurations here if necessary (e.g., error logging, security settings)

?>
