<?php
$host='localhost';
$db='testdatabase';
$user='root';
$pass='';

try {
    $conn=new PDO("mysql:host=$host;dbname=$db",$user,$pass,);
    $sql="CREATE TABLE users(id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(30) NOT NULL
     , pass VARCHAR (50) NOT NULL)";

     $conn->exec($sql);
     echo "Table created sucessfully";

    // $sql="CREATE DATABASE testdatabase"; //sintaks per krijimin e databases me mysql
    
    // $conn->exec($sql);
    
    // echo"Database is created";
} catch (Exception $e) {
    // echo "Database is not created, something went wrong";
    echo "Error creating table: " . $e->getMessage();
    
}

?>