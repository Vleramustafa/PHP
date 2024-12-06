<?php
include_once ('config.php');
$sql='SELECT * FROM users';
$getusers=$connect->prepare($sql);
$getusers->execute();
$users=$getusers->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson10</title>
</head>
<body>
    <table>
        <thead>
        <th>ID</th>
        <th>Username</th>
        <th>Name</th>
       
        <th>Email</th>
        </thead>
    </table>
    <tbody>
<?php
foreach($users as $user){


?>
<tr>
    <td><?= $user['id']?></td>
    <td><?= $user['username']?></td>
    <td><?= $user['name']?></td>
    <td><?= $user['email']?></td>
</tr>

<?php
}
?>


    </tbody>
    
</body>
</html>