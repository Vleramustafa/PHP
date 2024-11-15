<?php
   $host='localhost';
   $db='testdbase';
   $user='root';
   $pass='';

   try{
    $conn=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    $sql="CREATE TABLE users(id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR (30) NOT NULL,
    pass VARCHAR(50) NOT NULL)";

    $conn->exec($sql);
    echo "table created successfully";

    //$sql="CREATE DATABASE testdbase";

    //$conn->exec($sql);

    //echo "Database is created";
   }catch(Exception $e){
     //echo "Database not created,something went wrong";
     echo "error creating table: " . $e->getMessage();
   }
?>