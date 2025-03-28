<?php

session_start();

include_once('config.php');

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Please fill all fields.";
    } else {
        // Add 'username' to the SELECT query
        $sql = "SELECT id, username, name, email, password FROM users WHERE username = :username";

        $selectUser = $conn->prepare($sql);
        $selectUser->bindParam(":username", $username);
        $selectUser->execute();
        $data = $selectUser->fetch();

        if ($data == false) {
            echo "The user does not exist.";
        } else {
            // Check if the password matches the hashed password in the database
            if (password_verify($password, $data['password'])) {
                $_SESSION['id'] = $data['id'];
                $_SESSION['username'] = $data['username']; // Now this is valid
                $_SESSION['name'] = $data['name'];
                $_SESSION['email'] = $data['email'];

                // Redirect to the dashboard after successful login
                header('Location: dashboard.php');
                exit(); // Ensure that no further code is executed after the redirect
            } else {
                echo "The password is not valid.";
            }
        }
    }
}

?>