<?php
$user= 'root';
$pass= '';
$server='server';
$dbname='mms';

try{
     
    $conn=new PDO("mysql:$server;dbname=$dbname",$user,$pass);

}catch(PDEOException $e){
    echo "error:" . $e->getMessage();

}