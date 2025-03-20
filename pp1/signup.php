<?php

include_once('config.php');

if(isset($_POST['submit'])){
    $name=$_POST['emri'];
    $surname=$_POST['surname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $tempPass=$_POST['password'];

    $password=password_hash($tempPass, PASSWORD_DEFAULT);

    $tempConfirm=$_POST['confirm_password'];
    $confirm_password=password_hash($tempConfirm, PASSWORD_DEFAULT);

    if(empty($name) || empty($username) || empty($surname) || empty($email) || empty($password) || empty($confirm_password)){
        echo "you have not filled  in all the fields ";
    }else{
       
        $sql="INSERT INTO users(name,username,surname,email,password,confirm_password) VALUE (:name,:username,:surname,:email,:password,:confirm_password)";

        $insertSQL=$conn->prepare($sql);
        $insertSQL->bindParam(':name',$name);
        $insertSQL->bindParam(':surname',$surname);
        $insertSQL->bindParam(':username',$username);
        $insertSQL->bindParam(':email',$email);
        $insertSQL->bindParam(':password',$password);
        $insertSQL->bindParam(':confirm_password',$confirm_password);

        $insertSQL->execute();

        header('location:login.php');

    }
   
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	background: url(bmw.jpg) no-repeat;
	background-size: cover;
	background-position: center;
}
.wrapper{
	width: 420px;
	background: transparent;
	border: 2px solid rgba(225, 225, 225, 2.0);
	backdrop-filter: blur(10px);
	color: #fff;
	border-radius: 12px;
	padding: 30px 40px;
}
.wrapper h1{
	font-size: 36px;
	text-align: center;
}
.wrapper .input-box{
	position: relative;
	width: 100%;
	height: 50px;

	margin: 30px 0;
}
.input-box input{
	width: 80%;
	height: 50%;
	background: transparent;
	border: none;
	outline: none;
	border: 2px solid rgba(225, 225, 225, 2.0);	
	border-radius: 40px;
	font-size: 16px;
	color: #fff;
	padding: 20px 45px 20px 20px;
}
.input-box input::placeholder{
	color: #fff;

}
.input-box i{
	position: absolute;
	right: 20px;
	top: 30%;
	transform: translate(-50%);
	font-size: 20px;
}
.wrapper .remember-forgot{
	display: flex;
	justify-content: space-between;
	font-size: 14.5px;
	margin: -15px 0 15px;
}
.remember-forgot label input{
	accent-color: #fff;
	margin-right: 3px;
}
.remember-forgot a{
	color: #fff;
	text-decoration: none;
}
.remember-forgot a:hover{
	text-decoration: underline;
}
.wrapper .btn{
	width: 100%;
	height: 45px;
	background: #fff;
	border: none;
	outline: none;
	border-radius: 40px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 1.0);
	cursor: pointer;
	font-size: 16px;
	color: #333;
	font-weight: 600;
}
.wrapper .register-link{
	font-size: 14.5px;
	text-align: center;
	margin-top: 20px 0 15px;
}
.register-link p a{
	color: #fff;
	text-decoration: none;
	font-weight: 600;
}
.register-link p a{
	text-decoration: underline;
}
    </style>
</head>
<body>
<div class="wrapper">
		<form action="">
			<h1>signup</h1>

            <div class="input-box">
             <input type="text" placeholder="name" required>
            </div>
            <div class="input-box">
             <input type="text" placeholder="surname" required>
            </div>
            <div class="input-box">
             <input type="email" placeholder="email" required>
            </div>
			<div class="input-box">
				<input type="text" placeholder="username"required >
				<i class='bx bxs-user'></i>
			</div>
				<div class="input-box">
				<input type="password" placeholder="password"required >
				<i class='bx bxs-lock-alt' ></i>
			</div>
       

				
			
				
			
		<button type="submit" class="btn">sign up</button>
		
		</form>
		
	</div>
</body>
</html>
