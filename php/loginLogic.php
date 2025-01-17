<?php

require_once('config.php');

if(isset($_POST['submit']))

{
    $username=$_POST['username'];
    $password=$_post['password'];

    if(empty($username) || empty($password)){
        echo "fill all the fields!";
        header("refresh:url=login.php");

    }else{
        $sql="SELECT * FROM users WHERE username=:username";
        $insertSql=$conn->prepare($Sql);
        $insertSql->bindParam(':username',$username);
        $insertSql->execute();


        if($insertSql->rowCount()>0){
            $data=$insertSql->fetch();
            if(password_verify($password,$data[$password]))
            $_SESSION['username']=$data['username'];
        header('location:dashboard.php');
        }

    }else{
        echo"user not found";
    }
}