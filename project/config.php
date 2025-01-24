<?php

$server = "localhost";
$username = "root";
$password ="";
$dbname = "project";

try {
	$conn=new PDO("mysql:host:$server;dbname=$dbname",$username,$password);
	
}catch (Exception $e) {
 echo "something went wrong";	
}

?>