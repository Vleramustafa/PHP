<?php

include_once('');

if(isset($_POST['submit']))
{
    $emri = $_POST['emri'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $tempPass = $_POST['password'];
    $password = password_hash($tempPass, PASSWORD_DEFAULT);

    $tempPass = $_POST['confirm_password'];
    $password = password_hash($tempConfirm, PASSWORD_DEFAULT);

    if(empty($emri) || empty($username) || empty($email) || empty($password) || empty($confirm_password))
    {
        echo "You have not filled in all the fields above";
    }
    else
    {

        $sql = "INSERT INTO users(emri,username,email,password,confirm_password) VALUES (:emri,:username,:email,:password,:confirm_password)";

        $insertSql = $conn
    }
}