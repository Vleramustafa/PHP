<?php
require_once '../includes/db.php';
require_once '../includes/functions.php';
session_start();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = sanitize($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: ../dashboard.php");
            exit;
        } else {
            $errors[] = "Incorrect password.";
        }
    } else {
        $errors[] = "Email not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login</h2>

<?php if (!empty($errors)) {
    foreach ($errors as $e) echo "<p style='color:red;'>$e</p>";
} ?>

<form method="POST">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Log In</button>
</form>

<p>Don't have an account? <a href="register.php">Register</a></p>
</body>
</html>
