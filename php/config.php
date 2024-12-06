<?php

$server = "localhost";
$username = "root";
$password ="";
$dbname = "testdb";

try {
	$conn=new PDO("mysql:host:$server;dbname=$dbname",$username,$password);
	
}catch (Exception $e) {
 echo "someyhing went wrong";	
}

?>