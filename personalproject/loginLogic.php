<?php

session_start();

include_once('config.php');

if(isset($_POST['submit'])){

    $email=$_POST['email'];

    $password=$_POST['password'];

    if(empty($email) || empty($password)){
        echo "Please fill out all the fields";
    }else{
        $sql="SELECT id,name,surname,email,password,is_admin FROM users WHERE email=:email";

        $selectUser=$conn->prepare($sql);
    $selectUser->bindParam(":email",$email);
  $selectUser->execute();
  $data= $selectUser->fetch();

  if($data==false){
    echo "The user does not exist";
  }else{
  if(password_verify($password,$data['password'])){
    $_SESSION['id']=$data['id'];
    $_SESSION['name']=$data['name'];
    $_SESSION['surname']=$data['surname'];
    $_SESSION['email']=$data['email'];
    $_SESSION['is_admin']=$data['is_admin'];

    header('Location:dashboard.php');
  }else{
    echo "The password is not valid";
  }
  }
}
}
