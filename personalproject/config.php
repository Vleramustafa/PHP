<?php
// Change these values to match your database configuration
$host = 'localhost';
$db = 'your_database';
$username = 'your_username';
$password = 'your_password';

try {
    // PDO connection to the database
    $pdo = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
