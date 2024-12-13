<?php
include_once('config.php');
$id=$_GET('id');
$sql="SELECT ALL * FROM users WHERE id=:id";

$prep=$connect->prepare($sql);
$prep->bindParam(' :id',$id);
$prep->execute();
$data=$prep->fetch();


?>