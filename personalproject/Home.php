<?php
include('config.php')
?>

<!DOCTYPE html>
<html lang="en">
<svg id="svg2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,128L0,160L1440,160L1440,0L0,0L0,0Z"></path></svg>
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
<svg id="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,64L0,96L1440,96L1440,320L0,320L0,320Z"></path></svg>
</html>
<style>
    body{
   margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	background-color:white;
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

#svg2{
	position:absolute;
	top:10px
}

#logo{
 height: 125px;
 width: 125px;
position: absolute;
top:15px;
border-radius:35px;
background-color:#273036;
border-style:solid;
color:white;
}

#registerbutton{
	position:absolute;
	top:60px;
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
	top:150px;
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
	top:60px;
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