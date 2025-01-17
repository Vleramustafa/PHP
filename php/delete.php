<?php
include_once("config.php")

$id=$_GET['id']
$sql="DELETE FROM user WHERE id=:id";

$getUsers=$coon->prepare($sql);

$getUsers->execute();

header('Location:dashboard.php');