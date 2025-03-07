<?php
session_start();
include('config.php'); // Database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Encrypt password before storing
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Check if username already exists
    $checkUser = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $checkUser->execute(['username' => $username]);
    $userExists = $checkUser->fetch();

    if ($userExists) {
        $error_message = "Username already exists!";
    } else {
        // Insert new user into the database
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->execute(['username' => $username, 'email' => $email, 'password' => $hashed_password]);

        // Redirect to login page after successful signup
        header("Location: login.php");
        exit;
    }
}
?>

<!-- Frontend Signup Form (if signup fails) -->
<div class="modal-content">
    <span class="close" id="closeSignup">&times;</span>
    <h2>Sign Up</h2>
    <?php if (isset($error_message)) { echo "<p style='color: red;'>$error_message</p>"; } ?>
    <form action="signup.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Sign Up</button>
    </form>
</div>
