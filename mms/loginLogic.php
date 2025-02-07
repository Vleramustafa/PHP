<?php

session_start();

include_once('config.php');

if(isset($_POST['submit'])){
    $username=$_POST['username'];

    $username=$_POST['password'];

    if(empty($username) || empty($password)){
        echo "Please fill all the fields";
    }else{
        $sql="SELECT id,name,username,surname,email,password,is_admin FROM users WHERE username=:username";

        $selectUser=$conn->prepare($sql);
        $selectUser->bindParam(":username",$username);
        $selectUser-execute();
        $data= $selectUser->fetch();

        if($data==false){
        echo "The user does not exist";
        }else{
          if(password_verify($password,$data['password'])){
            $_SESSION['id']=$data['id'];
            $_SESSION['username']=$data['username'];
            $_SESSION['name']=$data['name'];
            $_SESSION['surname']=$data['surname'];
            $_SESSION['is_admin']=$data['is_admin'];
            $_SESSION['email']=$data['email'];
            
            header('Location:dashboard.php');
          }else{
            echo"The Password is invalid"
          }


          }
        }
    }
