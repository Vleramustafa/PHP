<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <div id="topdown">
        <img id="logo" src="images/logo.png">
    <a id="Home" href="Home.php">HOME</a>
    <a id="registerbutton" href="registration.php">REGISTRATION</a>
    </div>
</head>
<body>
    <p id="paragraph2">How it started</p>
    <div id="section1">
        
        <h3><p id="paragraph">Our Dream Is Self-Improvement</p></h3>
        
<p id="paragraph3">Olympia is an Online Fitness Company Founded in 2025 dedicated to giving you the best of the best and nothing less <br><br>
            We started out in Kosovo in the city of Pristina and since then we have doubled our ratings,profits and have made major improvements.<br><br>
             Leading to the creation of this site</p>

</div>
          <div id="section2">
   <img id="equipment1" src="images/gym.webp">

   <h2><p id="rating">4.7/5<br><br>STAR RATINGS
   </p></h2>
   <p id="users">100K <br><br> DAILY USERS</p>

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
	background-color: #fff;
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

#registerbutton{
	position:absolute;
	top:35px;
	left:250px;
	color:#fff;
	text-decoration:none;
}

#registerbutton:hover{
color:#6495ed;
transition: ease-in 0.3s;
transform: scale(1.2);
}

#Home{
	position:absolute;
	top:35px;
	left:150px;
	color:#fff;
	text-decoration:none;
}

#Home:hover{
color:#6495ed;
transition: ease-in 0.3s;
transform: scale(1.2);
}

#topdown{
 background-color:#273036;
	position:absolute;
	top:1px;
	width:100%;
	height:90px
}

#logo{
    height: 100px;
 width: 100px;
top:100px;
position: absolute;
left:10px;
top: 10px;
background-color: #273036;
border-radius: 30px;
border-style:solid;
color:white;
}

#paragraph{
    font-style: italic;
    font-size: larger;
}

#section1{
    color:white;
    background-color:grey;
    text-align: center;
   left: 150px;
    top: 200px;
    position: absolute;
    border-style:groove;
    width:500px;
    height:350px;
    
}


#section3{
    text-align: center;
    height: 250px;
    position: absolute;
    right: 350px;
}

#equipment1{
   width: 550px;
   right: 200px;
   position: absolute;
   border-radius: 35px;
   top: 120px;
}

#section2{
    font-size: large;
}

#paragraph2{
    position: absolute;
    left: 150px;
    top:150px;
    color: orange;
    font-size: larger;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

#paragraph3{
    position:absolute;
    left: 100px;
    color:#fff;
    width:300px;
    bottom:75px;
    right:500px;
    text-align:center;
    font-family: monospace;
    
}

#rating{
    position:absolute;
    right:550px;
    bottom:100px;
    text-align: center;
    color:black;
}

#users{
    position:absolute;
    right:250px;
    bottom:110px;
    text-align: center;
    color:black;
   font-size: x-large;
    
}
</style>