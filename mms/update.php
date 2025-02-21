<?php
include_once('config.php');

if(isset($_POST['submit1'])){
    $id=$_POST['id'];
    $movie_name=$_POST['movie_name'];
    $movie_desc=$_POST['movie_desc'];
    $movie_quality=$_POST['movie_quality'];
    $movie_rating=$_POST['movie_rating'];

    $sql="UPDATE movies SET movie_name=:movie_name,movie_desc=:movie_desc,movie_quality=:movie_quality,movie_rating=:movie_rating";

    $prep=$conn->prepare($sql);

    
    $insertMovie->bindParam(':movie_name',$movie_name);
    $insertMovie->bindParam(':movie_desc',$movie_desc);
    $insertMovie->bindParam(':movie_quality',$movie_quality);
    $insertMovie->bindParam(':movie_rating',$movie_rating);
     
    $prep->execute();
    header('Location:home.php');
}
?>