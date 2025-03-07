<?php
// Database connection
$host = 'localhost';   // Host
$db = 'your_database'; // Database name
$username = 'your_username'; // Database username
$password = 'your_password'; // Database password

try {
    // Create PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Error handling mode
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
