<?php

session_start();

include_once('config.php');

$id=$_GET['id'];

$_SESSION['movie_id']=$id;
$sql="SELECT * FROM movies WHERE id=:id"
$selectMovies->bindParam(":id",$id);
$selectMovies->execute();

$movie_data=$selectMovies->fetch();
?>