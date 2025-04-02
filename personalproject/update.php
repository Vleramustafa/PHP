<?php
include_once('config.php');

if(isset($_POST['submit1'])){
    $id=$_POST['id'];
    $book_title=$_POST['book_title'];
    $book_author=$_POST['book_author'];
    $book_desc=$_POST['book_desc'];
    $book_price=$_POST['book_price'];
    $book_stock=$_POST['book_stock'];


    $sql="UPDATE books SET book_title=:book_title,book_author=:book_author,book_desc=:book_desc,book_price=:book_price,book_stock=:book_stock";

    $prep=$conn->prepare($sql);
 
    $prep->bindParam(':book_title',$book_title);
    $prep->bindParam(':book_author',$book_author);
    $prep->bindParam(':book_desc',$book_desc);
    $prep->bindParam(':book_price',$book_price);
    $prep->bindParam(':book_stock',$book_stock);

    $prep->execute();
    header('Location:home.php');
}
?>