<?php
include_once("config.php");

$id = $_GET["id"];

$sql = "DELETE FROM users WHERE id=:id";
$getusers=$conn->prepare($sql);
$gerusers->execute();

header("Location:dashboard.php");