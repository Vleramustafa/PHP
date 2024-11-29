<?php
// $username=$_GET['username'];
// $password=$_GET['password'];
// echo $username;
// echo"<br>";
// echo $password;


?>




<html>
<head>

</head>
<body>
    <!-- <form>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="Username"><br>
        <label for="oassword">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="Password"><br>
        <input type="submit" value="Submit">
    </form> -->
    <form action="add.php" method='POST'>
    <input type="text" id="name" name="name" placeholder="name"><br>
    <input type="text" id="surname" name="surname" placeholder="surname"><br>
    <input type="text" id="email" name="email" placeholder="email"><br>

    <button type="submit"  name="submit">Add</button>
    </form>







</body>



</html>