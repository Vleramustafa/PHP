<?php

?>

<!DOCTYPE html>
<html>
<br><br>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<div id="topdown">
	<img id="logo" src="images/logo.png">
<a id="Home" href="home.php">HOME</a>
<a id="slogan" href="aboutus.php">-FITNESS DONE RIGHT-</a>
</div>


</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
          <input type="text" name="name" placeholder="Name" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
<svg id="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,64L0,96L1440,96L1440,320L0,320L0,320Z"></path></svg>
<a id="ig" href="">INSTAGRAM</a>
<a id="fb" href="">FACEBOOK</a>
<a id="tt" href="">TIKTOK</a>
</html>
<style>
body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background-color:white;
	background: url('images/background.jpg');
  background-size: cover;
}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background-color:#273036;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}

#fb{
	position:absolute;
	bottom:-200px;
	left:100px;
	color:white;
	font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  font-weight: bold;
  text-decoration:none;
}

#ig{
	position:absolute;
	bottom:-200px;
	color:white;
	font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  font-weight: bold;
  text-decoration:none;
}
#tt{
position:absolute;
	bottom:-200px;
	right:100px;
	color:white;
	font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  font-weight: bold;
  text-decoration:none;
}

#ig:hover{
	color:#6495ed;
	transition: ease-in 0.3s;
	transform: scale(1.2);
}

#fb:hover{
	color:#6495ed;
	transition: ease-in 0.3s;
	transform: scale(1.2);
}

#tt:hover{
	color:#6495ed;
	transition: ease-in 0.3s;
	transform: scale(1.2);
}

#logo{
 height: 100px;
 width: 100px;
position: absolute;
left:10px;
top: 10px;
border-radius:30px;
border-style:solid;
color:white;
background-color:#273036;
}

#svg{
	position: absolute;
	bottom: -300px;
}

#slogan{
	position:absolute;
	top:50px;
	right:740px;
	color:#fff;
	text-decoration:none;
	font-family: 'Courier New', Courier, monospace;
	font-weight: lighter;
    font-style: italic;
  
}

#slogan:hover{
	color:#6495ed;
transition: ease-in 0.3s;
transform: scale(1.1);
}

#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}

label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 50px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 10px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 12px;
	border: none;
	outline: none;
	border-radius: 5px;
}

#topdown{
 background-color: #273036;
	position:absolute;
	top:1px;
	width:100%;
	height:100px;
}


#Home{
	position:absolute;
	top:45px;
	left:150px;
	color:#fff;
	text-decoration:none;
	font-weight:bold;
}

#Home:hover{
color:#6495ed;
transition: ease-in 0.3s;
transform: scale(1.2);
}

button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #273030;
	font-size: 1em;
	font-weight: bold;
	margin-top: 30px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background:rgb(79, 78, 80)
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #273030;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}



</style>