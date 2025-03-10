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
<a id="Home" href="Home.php">HOME</a>
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
<svg id="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#302b63" fill-opacity="1" d="M0,64L60,85.3C120,107,240,149,360,144C480,139,600,85,720,101.3C840,117,960,203,1080,240C1200,277,1320,267,1380,261.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
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
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
  background-size: cover
}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
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
 height: 90px;
 width: 100px;
position:relative;
border-radius:1px;
}

#svg{
	position: absolute;
	bottom: -300px;
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
 background: linear-gradient(to bottom,rgb(37, 30, 103),rgb(39, 35, 83),rgb(37, 30, 100));
	position:absolute;
	top:1px;
	width:100%;
	height:90px;
}


#Home{
	position:absolute;
	top:35px;
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
	background: #573b8a;
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
	background: #6d44b8;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
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