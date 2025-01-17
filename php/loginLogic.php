<?php
 require_once('config.php');

 if(isset($_POST['submit']))
 {

    $username=$_POST['username'];
    $password=$_POST['password']l;

    if(empty($username) || empty($password)){
        echo "Fill all the fields!";
        header("refresh:2;url=login.php");
    }else{
        $sql="SELECT * FROM users WHERE username=:username";
        $insertSql=$coon->prepare($sql);
        $insertSql->bindParam(':username',$username);
        $insertSql->execute();

        if($insertSql->rowCount()>0){

            $data=$insertSql->fetch();
            if(password_verify($password,$data[$password])){
                $_SESSION
            }
        }
    }
 }