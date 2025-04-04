<?php

include_once('config.php');

$is=$_GET['id'];

$sql="DELETE FROM cars WHERE id=:id";
$prep=$conn->prepare($sql);
$prep->bindParam(':id',$id);
$prep->execute();

header('location: list_cars.php');


?>