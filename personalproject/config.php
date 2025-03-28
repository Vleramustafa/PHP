<?php
$user='root';
$pass='';
$server='localhost';
$dbname='database1';

try{

    $conn=new PDO("mysql:host=$server;dbname=$database1", $user,$pass);   
}catch(PDOException $e){
    echo "error: " . $e->getMessage();
}