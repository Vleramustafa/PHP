<?php

session_start();

include_once('comfig.php');

if(isset($_POST['submit'])){

    $username=$_POST['username'];

    $password=$_POST['password'];

    if(empty($username) || empty($password)){
        echo "please fill all fields"
    }else{
        $sql="SELECT id,name,surnamne,email,password,is_admin FROM users WHERE username=:username";

        $selectUser=$conn->prepare($sql);
        $selectUser->bindParam(":username",$username);
        $selectUser->execute();
        $data= $selectUser->fetch();

        if($dta==false){
            echo "the user does not exist";
        }else{
            if(password_verify($password,$data['password'])){
                $_SESSION['id']=$data['id'];
                $_SESSION['username']=$data['username'];
                $_SESSION['name']=$data['name'];
                $_SESSION['surname']=$data['surname'];
                $_SESSION['email']=$data['email'];
                $_SESSION['is_admin']=$data['is_admin'];
               
                header('location:dashboard.php');

            }else{
                echo "the password is not valid";
            }
        }
    }

}


?>