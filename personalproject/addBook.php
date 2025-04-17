<?php
include_once('config.php');

if (isset($_POST['submit'])) {

    $book_title  = $_POST['book_title'];
    $book_author = $_POST['book_author'];
    $book_desc   = $_POST['book_desc'];
    $book_price  = $_POST['book_price'];
    $book_stock  = $_POST['book_stock'];

    // Process the book cover file upload
    if (isset($_FILES['book_cover']) && $_FILES['book_cover']['error'] == 0) {
        // Define the upload folder
        $upload_dir = 'img/';
        // Get the file name
        $file_name = basename($_FILES['book_cover']['name']);
        // Specify the destination path
        $target_file = $upload_dir . $file_name;

        // Move the uploaded file to the upload folder
        if (!move_uploaded_file($_FILES['book_cover']['tmp_name'], $target_file)) {
            die("Error uploading file.");
        }
    } else {
        // Provide a default image if upload fails or file is not set
        $file_name = 'default.jpg';
    }

    // Use the file name for the cover image in your database.
    $sql = "INSERT INTO books(book_title, book_author, book_desc, book_price, book_stock, book_cover)
            VALUES (:book_title, :book_author, :book_desc, :book_price, :book_stock, :book_cover)";

    $insertBook = $conn->prepare($sql);
    $insertBook->bindParam(':book_title', $book_title);
    $insertBook->bindParam(':book_author', $book_author);
    $insertBook->bindParam(':book_desc', $book_desc);
    $insertBook->bindParam(':book_price', $book_price);
    $insertBook->bindParam(':book_stock', $book_stock);
    $insertBook->bindParam(':book_cover', $file_name);

    $insertBook->execute();

    header('Location: books.php');
}
?>
