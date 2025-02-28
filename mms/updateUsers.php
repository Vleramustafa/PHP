<?php
include_once('config.php');

if(isset($_POST['SUBMIT'])){
    $id=$_POST['id'];
    $name=$_POST['username'];
    $email=$_POST['email'];

    $sql="UPDATE users SET id=:id, name=:name , username=:username,email=:emaiL WHERE id=:id";

    $prep=$conn->prepare($sql);
    $prep->bindParam(":id",$id);
    $prep->bindParam(':name', $name);
    $prep->bindParam(':username',$username);
    $prep->bindParam(':email',$email);
    $prep->execute();

    header('Location:dashboard.php');
}