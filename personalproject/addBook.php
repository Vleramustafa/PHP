<?php

include_once('config.php');

if(isset($_POST['submit'])){

    $book_title=$_POST['book_title'];
    $book_author=$_POST['book_author'];
    $book_desc=$_POST['book_desc'];
    $book_price=$_POST['book_price'];
    $book_stock=$_POST['book_stock'];
    $book_cover=$_POST['book_cover'];

    $sql="INSERT INTO movies(movie_name,movie_desc,movie_quality,movie_image,movie_rating) VALUES(:movie_name,:movie_desc,:movie_quality,:movie_image,:movie_rating)";

    $insertMovie=$conn->prepare($sql);

    $insertMovie->bindParam(':movie_name',$movie_name);
    $insertMovie->bindParam(':movie_desc',$movie_desc);
    $insertMovie->bindParam(':movie_quality',$movie_quality);
    $insertMovie->bindParam(':movie_image',$movie_image);
    $insertMovie->bindParam(':movie_rating',$movie_rating);

    $insertMovie->execute();

    header('Location:movies.php');