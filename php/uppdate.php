<?php
include_once('config.php');

if(isset($_post['update'])){
    $id=$_post['id'];
    $username=$_post['username'];
    $name=$_post['name'];
    $surname=$_post['surname'];
    $email=$_post['email'];

    $sql="UPDATE users SET usersname=:username, name=:name, surname=:surname, email=:email WHERE id=:id";
    $prep=conn->prepatre($sql);
    $prep->bindParam(':id',$id);
    $prep->bindParam(':name',$name);
    $prep->bindParam(':surname',$surname);
    $prep->bindParam(':email',$email);
    $prep->bindParam(':username',$username);

    $prep->execute();

    header('location:dashboard.php');
    
    

}