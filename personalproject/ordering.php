<?php
session_start();

include_once('config.php');

$user_id = $_SESSION['id'];

if ($_SESSION['is_admin'] == 'true') {
    $sql = "SELECT books.book_title, users.email, orders.id, orders.quantity, orders.order_date, orders.is_approved, orders.total_price FROM books
            INNER JOIN orders ON books.id = orders.book_id
            INNER JOIN users ON users.id = orders.user_id";

    $selectOrders = $conn->prepare($sql);
    $selectOrders->execute();

    $orders_data = $selectOrders->fetchAll();
} else {
    $sql = "SELECT books.book_title, users.email, orders.id, orders.quantity, orders.order_date, orders.is_approved, orders.total_price FROM books
            INNER JOIN orders ON books.id = orders.book_id
            INNER JOIN users ON users.id = orders.user_id WHERE orders.user_id = :user_id";
    
    $selectOrders = $conn->prepare($sql);
    $selectOrders->bindParam(':user_id', $user_id);
    $selectOrders->execute();
    
    $orders_data = $selectOrders->fetchAll();
}
?>
