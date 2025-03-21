<?php
$user="root";
$pass="";
$server="localhost";
$dbname="gym";


try{
    $conn=new PDO("mysql:host=$server;gym=$dbname",$user,$pass);

}catch(PDOException $e){
 echo "error: ". $e->getMessage();
}
?>