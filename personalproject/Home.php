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
        <a id="slogan" href="">-FITNESS DONE RIGHT-</a>
    
</head>
<body>
    
</body>
</html>
<style>
    body{
   margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
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
}

#olympia{
	position: absolute;
	top:100px;
    font-size: xx-large;
	color:#fff;
	text-decoration:none;
	
	
}

#olympia:hover{
color:#6495ed;
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

</style>