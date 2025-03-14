<?php

include_once('config.php');

if(isset($_POST['submit']))
{
    $emri=$_POST['emri'];
    $username=$_POST['surname'];
    $email=$_POST['username'];
    
    $tempPass = $_POST['password'];
    $password = password_hash($tempPass, PASSWORD_DEFAULT);

    $tempConfirm = $_POST['confirm_password'];
    $confirm_password = password_hash($tempConfirm, PASSWORD_DEFAULT);

    if(empty($emri) || empty($username) || empty($email) || empty($password) || empty($password) || empty($confirm_password))
    {
        echo "You have not filled in all the fields.";
    }else
    {
        $sql="INSERT INTO users(emri,username,,email,password,confirm_password) VALUE (:emri,:username,:email,:password,:confirm_password)";

        $insertSQL=$conn->prepare($sql);

        $insertSQL->bindParam(':emri',$emri);
        $insertSQL->bindParam(':username',$username);
        $insertSQL->bindParam(':email',$email);
        $insertSQL->bindParam(':password',$password);
        $insertSQL->bindParam(':confirm_password',$confirm_password);

        $insertSQL->execute();

        header('Location:login.php');
    }
}

?>