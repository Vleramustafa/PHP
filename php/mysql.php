<?php

 $host='localhost';
 $user='root';
 $pass='';


 try{

 	$conn=new PDO("mysql:host=$host", $user, $pass);

 	echo "connect";

 }catch(Exception $e){
      echo "not connected";
 }



?>