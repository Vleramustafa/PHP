<?php

include_once('config.php');

if(isset($_POST['submit'])){
    $name=$_POST['emri'];
    $surname=$_POST['surname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $temPass=$_POST['password'];

    $password=password_hash($temPass, PASSWORD_DEFAULT);

    $temConfirm=$_POST['confirm_password'];
    $confirm_password=password_hash($temConfirm , PASSWORD_DEFAULT);

    if(empty($name) || empty($username) || empty($surname) || empty($email) || empty($password) || empty($confirm_password)){
       echo "You have not filled in all the fields";
    }
else{
    $sql="INSERT INTO users(name,username,surname,email,password,confirm_password) VALUE (:name,:username,:surname,:email,:password,:confirm_password)";

    $insertSQL=$conn->prepare($sql);
    $insertSQL->bindParam(":name",$name);
    $insertSQL->bindParam(":surname",$surname);
    $insertSQL->bindParam(":username",$username);
    $insertSQL->bindParam(":email",$email);
    $insertSQL->bindParam(":password",$password);
    $insertSQL->bindParam(":confirm_password",$confirm_password);

    $insertSQL->execute();

    header("Location:login.php");
}
    }
