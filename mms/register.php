<?php


include_once('config.php');

if(isset($_post['submit'])){
    $name=$_POST['emri'];
    $surname=$_POST['surname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $tempPass=$_POST['password'];

    $password=pasword_hash($tempPass, PASSWORD_DEFAULT);

    $tempConfirm=$_POST['confirm_password'];
    $confirm_password=password_hash($tempConfirm,PASSWORD_DEFAULT);

    if(empty($name) || empty($surname) || empty($username) || empty($email) || empty($password) || empty($confirm_password)){
        echo "You have not filled in all the fields";
    }else{
        $sql="INSERT INTO users(name,username,surname,email,password,confirm_password) VALUE (:name,:username,:surname,:email,:password,:confirm_password)";

        $insertSQL=$conn->prepare($sql);
        $insertSQL=$conn->prepare(':name',$name);
        $insertSQL=$conn->prepare(':surname',$surname);
        $insertSQL=$conn->prepare(':username',$username);
        $insertSQL=$conn->prepare(':email',$email);
        $insertSQL=$conn->prepare(':password',$password);
        $insertSQL=$conn->prepare(':confirm_password',$confirm_password);

        $insertSQL->execute();

        header('Location:login.php');
        
    }
}