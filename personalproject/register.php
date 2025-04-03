<?php
include_once('config.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $tempPass=$_POST['password'];

    $password=password_hash($tempPass, PASSWORD_DEFAULT);

    $tempConfirm=$_POST['confirm_password'];
    $confirm_password=password_hash($tempConfirm, PASSWORD_DEFAULT);

    if(empty($name) || empty($surname) || empty($email) || empty($password) || empty($confirm_password)){
        echo "You have not filled in all the fields";
    }else{
        $sql="INSERT INTO users(name,surname,email,password,confirm_password) VALUES (:name,:surname,:email,:password,:confirm_password)";

        $insertSQL=$conn->prepare($sql);
        $insertSQL->bindParam(":name",$name);
        $insertSQL->bindParam(":surname",$surname);
        $insertSQL->bindParam(":email",$email);
        $insertSQL->bindParam(":password",$password);
        $insertSQL->bindParam(":confirm_password",$confirm_password);

        $insertSQL->execute();

        header("Location:login.php");
    }
}