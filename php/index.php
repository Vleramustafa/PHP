<?php
try{
 $pdo=new PDO("mysql:host=localhost; dbname=testdb",'root','');

//  $username='Dren';
 
//  $password=password_hash('mypassword',PASSWORD_DEFAULT);

//  $sql="INSERT INTO users (username,pass) VALUE ('$username','$password')";
 $sql="ALTER TABLE products ADD email varchar(255)";
 $pdo->exec($sql);

 echo "New record created sucesfully";

}catch(DOException $e){
 
    echo $e->getMessage();
}
?>