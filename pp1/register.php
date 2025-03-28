<?php
/*
  We will include config.php for connection with the database.
  We will get data from index.php file and insert them into the database when the Sign Up button is clicked in index.php file.
  If any of the sessions are empty, we will get a message.
*/

include_once('config.php');

if (isset($_POST['submit'])) {

    $emri = $_POST['name']; // user name
    $username = $_POST['username']; // username
    $email = $_POST['email']; // email

    // password processing
    $tempPass = $_POST['password']; 
    $password = password_hash($tempPass, PASSWORD_DEFAULT);

    // confirm password processing
    $tempConfirm = $_POST['confirm_password']; 
    $confirm_password = password_hash($tempConfirm, PASSWORD_DEFAULT);

    // Check if all fields are filled in
    if (empty($emri) || empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "You have not filled in all the fields.";
    } else {

        // Insert data into the database (without including the `id` field)
        $sql = "INSERT INTO users(name, username, email, password, confirm_password) 
                VALUES (:emri, :username, :email, :password, :confirm_password)";

        $insertSql = $conn->prepare($sql);

        $insertSql->bindParam(':emri', $emri);
        $insertSql->bindParam(':username', $username);
        $insertSql->bindParam(':email', $email);
        $insertSql->bindParam(':password', $password);
        $insertSql->bindParam(':confirm_password', $confirm_password);

        // Execute the statement
        $insertSql->execute();

        // Redirect to login page
        header("Location: login.php");
        exit();
    }
}
?>