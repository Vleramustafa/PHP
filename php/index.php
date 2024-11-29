 <?php

// $username=$_GET['username'];
// $password=$_GET['password'];
// echo $username;
// echo "<br>";
// echo $password;

?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="Password"><br><br>
        <input type="submit" value="submit">
    </form> -->
    <form action="add.php" method='POST'>
        <input type="text" id="name" name="name" placeholder="name"><br>
        <input type="text" id="surname" name="surname" placeholder="surname"><br>        
        <input type="text" id="email" name="email" placeholder="email"><br>
        <button type='submit' name='submit'>Add</button>
    </body>
</html>