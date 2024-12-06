<?php
include_once('config.php');
$sql=" SELECT * FROM users";
$getUsers=$conn->prepare($sql);
$getUsers->execute();
$users=$getUsers->fetchAll();



?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>lesson 10</title>
</head>
<body>
  <table>
   <thead>
   	<th>ID</th>
   	<th>username</th>
   	<th>name</th>
   	<th>surname</th>
   	<th>email</th>
   </thead>
   <tbody>
   	<?php
 foreach ($users as $user ) {
 	
 
   	?>
     <tr>
     	<td><? $user['id'?></td>
     	<td><? $user['username'?></td>
     	<td><? $user['name'?></td>
     
     	<td><? $user['email'?></td>
     </tr>

   	<?php
    }
   	?>
   </tbody>
  </table>
</body>
</html>
