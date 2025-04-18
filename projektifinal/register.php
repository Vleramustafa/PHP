<?php

include_once('config.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $tempPass = $_POST['password'];

    $password = password_hash($tempPass, PASSWORD_DEFAULT);

    if(empty($name) || empty($surname) || empty($username) || empty($email) || empty($tempPass)){
        echo "Please fill in all the fields.";
    } else {
        $sql = "INSERT INTO users(name, username, surname, email, password) 
                VALUES (:name, :username, :surname, :email, :password)";

        $insertSQL = $conn->prepare($sql);
        $insertSQL->bindParam(':name', $name);
        $insertSQL->bindParam(':surname', $surname);
        $insertSQL->bindParam(':username', $username);
        $insertSQL->bindParam(':email', $email);
        $insertSQL->bindParam(':password', $password);

        $insertSQL->execute();

        header('Location: login.php');
        exit;
    }
}
?>
