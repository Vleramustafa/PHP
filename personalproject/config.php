<?php
$user = "root";
$pass = "";
$server = "localhost";
$dbname = "gym";

try {
    // Correct PDO connection string
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>