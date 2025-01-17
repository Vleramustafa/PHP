<?php
include_once('config.php'); 

$id=$_get["id"];
$sql="DELETE FROM users WHERE id=:id";
$getusers=$conn->prepare($sql);
$getuser->(execute);
header("Locatcion:dashboar.php");
