<?php
session_start();
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $userId = $_SESSION['id']; // assuming user is logged in

    // Insert into orders table
    $sql = "INSERT INTO orders (user_id, product_id) VALUES (:user_id, :product_id)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user_id', $userId);
    $stmt->bindParam(':product_id', $productId);
    $stmt->execute();

    header('Location: products.php?added=1');
    exit();
}
?>