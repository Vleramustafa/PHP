<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <img id="logo" src="images/logo.png">
</head>
<body>
    <p id="paragraph2">How it started</p>
    <div id="section1">
        
        <p id="paragraph">Our Dream Is Self-Improvement</p>
          </div>
          <div id="section2">
   <img id="equipment1" src="images/gym.webp">
          </div>
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
	background-color: #0f0c29;
  background-size: cover;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  font-weight: bold;
}
.main{
	width: 350px;
	height: 500px;
	background: gray;
	overflow: hidden;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}

#logo{
    height: 100px;
 width: 100px;
top:100px;
position: absolute;
left:10px;
top: 10px;
background-color: #000;
border-radius: 30px;
}

#section1{
    color: white;
    text-align: center;
   left: 250px;
    top: 200px;
    position: absolute;
    
}

#section3{
    text-align: center;
    height: 250px;
    position: absolute;
    right: 350px;
}

#equipment1{
   width: 500px;
   right: 150px;
   position: absolute;
   border-radius: 40px;
   top: 90px;
}

#paragraph2{
    position: absolute;
    left: 250px;
    top:150px;
    color: orange;
}
</style>