<?php
$user ='root' ;
$pass='';
$server='localhost';
$dbname='mms1';

try{
$coon=new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
}catch(PDOExeption $e){
echo "error: " . $e->getMessage();
}