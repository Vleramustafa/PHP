<?php
try{
    $pdo=new PDO("mysql:host=localhost; dbname=testdb",'root','');
    $pdo=new PDO("mysql:host=localhost; dbname=testdb",'root','');
    // $username='Erina';
    // $password=password_hash('mypassword',PASSWORD_DEFAULT);
    // $sql="INSERT INTO users (username,pass) VALUE ('$username','$password')";
    $sql="ALTER TABLE products ADD email VARCHAR"
    $pdo->exec($sql);
    echo "New record created successfully";

}catch(DOException $e){
    echo $e->getMessage();
}
?>