<?php

include_once('config.php');

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $username=$_POST['username'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $temPass=$_POST['password'];
    $password=password_hash($temPass, PASSWORD_DEFAULT);

    if(empty($name)  ||)
}