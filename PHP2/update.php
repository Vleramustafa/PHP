<?php
include_once('config.php');

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $username=$_POST['username'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];

    $sql="UPDATE users SET username=:username, name=:name, surname=:surname, email=:email WHERE id=:id";
    $prep=$conn->prepare($sql);
    $prep->bindPharm(':id',$id);
    $prep->bindPharm(':name',$name);
    $prep->bindPharm(':surname',$surname);
    $prep->bindPharm(':email',$email);
    $prep->bindPharm(':username',$username);

    $prep->execute();

    header('location:dashboard.php');
}