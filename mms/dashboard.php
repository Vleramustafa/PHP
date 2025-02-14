<?php

session_start();

include_once('config.php');
if(empty($_SESSION['username'])){
    header('Location:login.php')
}

$sql="SELECT * FROM users";
$selectUsers=$conn->prepare($sql);
$selectUsers->execute();

$users_data=$selectUsers->fetchAll();
?>






