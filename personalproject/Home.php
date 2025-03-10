<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <img id="logo" src="images/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" contenEGISt="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <a id="registerbutton" href="registration.php">REGISTRATION</a>
        <a id="olympia" href="Home.php">OLYMPIA</a>
        <a id="slogan" href="aboutus.php">-FITNESS DONE RIGHT-</a>
    
</head>
<body>

</body>
	<svg id="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,64L60,85.3C120,107,240,149,360,144C480,139,600,85,720,101.3C840,117,960,203,1080,240C1200,277,1320,267,1380,261.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
</html>
<style>
    body{
   margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	background-color:black;
  background-size: cover;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  font-weight: bold;
}
.main{
	width: 350px;
	height: 500px;
	background: white;
	overflow: hidden;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}

#svg{
	position: absolute;
	bottom: 10px;
}

#logo{
 height: 100px;
 width: 100px;
top:100px;
position: absolute;
top:10px;
}

#registerbutton{
	position:absolute;
	top:40px;
	right:150px;
	color:#fff;
	text-decoration:none;
	
}

#registerbutton:hover{
color:#6495ed;
transition: ease-in 0.3s;
transform: scale(1.2);
}

#olympia{
	position: absolute;
	top:100px;
    font-size: xx-large;
	color:#fff;
	text-decoration:none;
	cursor:default;
}

#olympia:hover{
color:#6495ed;
transition: ease-in 0.3s;
transform: scale(1.1);
}

#slogan{
	position:absolute;
	top:35px;
	left:150px;
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

</style>