<?php
include_once('config.php');
if(isset($_POST['update']));
$id=$_POST['id'];
$username=$_POST['username'];
$name=$_POST['name'];
$email=$_POST['email'];
?>

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST" >
        <input type="text" name="id" value="<?php echo $data['id']?> " > 
        <input type="name" name="name" value="<?php echo $data['name']?> "> 
        <input type="username" name="username" value="<?php echo $data['username']?> ">
         <input type="email"  name="email" value="<?php echo $data['email']?> ">
    </form>
</body>
</html>