<?php
include_once('config.php');

if (isset($_POST['submit'])) {
    $emri = trim($_POST['emri']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check for empty fields
    if (empty($emri) || empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "You have not filled in all the fields.";
        exit;
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Optional: Check if email or username already exists
    $checkUser = $conn->prepare("SELECT * FROM users WHERE username = :username OR email = :email");
    $checkUser->execute(['username' => $username, 'email' => $email]);
    if ($checkUser->rowCount() > 0) {
        echo "Username or email already taken.";
        exit;
    }

    // Insert new user
    $sql = "INSERT INTO users (emri, username, email, password) VALUES (:emri, :username, :email, :password)";
    $insertSql = $conn->prepare($sql);
    $insertSql->bindParam(':emri', $emri);
    $insertSql->bindParam(':username', $username);
    $insertSql->bindParam(':email', $email);
    $insertSql->bindParam(':password', $hashedPassword);

    if ($insertSql->execute()) {
        header("Location: login.php");
        exit;
    } else {
        echo "Error occurred during registration.";
    }
}
?>
