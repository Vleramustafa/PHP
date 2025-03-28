<?php

include_once('config.php');

if(isset($_POST['submit'])){

    $book_title=$_POST['book_title'];
    $book_author=$_POST['book_author'];
    $book_desc=$_POST['book_desc'];
    $book_price=$_POST['book_price'];
    $book_stock=$_POST['book_stock'];
    $book_cover=$_POST['book_cover'];

    $sql="INSERT INTO books(book_title,book_author,book_desc,book_price,book_stock,book_cover) VALUES(:book_title,:book_author,:book_desc,:book_price,:book_stock,:book_cover)";

    $insertBook=$conn->prepare($sql);

    $insertMovie->bindParam(':book_title',$book_title);
    $insertMovie->bindParam(':book_author',$book_author);
    $insertMovie->bindParam(':book_desc',$book_desc);
    $insertMovie->bindParam(':book_price',$book_price);
    $insertMovie->bindParam(':book_stock',$book_stock);
    $insertMovie->bindParam(':book_cover',$book_cover);

    $insertMovie->execute();

    header('Location:books.php');