<?php
include_once('config.php');

$id = $_GET['id'];

// First delete from orders table where this product is used
$sqlOrders = "DELETE FROM orders WHERE product_id = :id";
$prepOrders = $conn->prepare($sqlOrders);
$prepOrders->bindParam(':id', $id);
$prepOrders->execute();

// Now delete from products table
$sql = "DELETE FROM products WHERE id = :id";
$prep = $conn->prepare($sql);
$prep->bindParam(':id', $id);
$prep->execute();

header('Location: dashboard.php');
exit();
?>
