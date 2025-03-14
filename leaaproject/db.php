<?php
$host = 'localhost';
$dbname = 'user_management';
$username = 'root'; // ose përdorni përdoruesin tuaj të bazës së të dhënave
$password = ''; // ose përdorni fjalëkalimin tuaj

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
