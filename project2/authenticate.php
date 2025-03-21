<?php
// Simulating user authentication (in a real application, you should query a database)
$valid_email = "user@example.com";
$valid_password = "password123";  // In real applications, never store plain text passwords

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate the email and password
    if ($email === $valid_email && $password === $valid_password) {
        echo "Welcome, you are logged in!";
        // Here, you could start a session and redirect the user to their dashboard or another page.
        // session_start();
        // $_SESSION['user'] = $email;
        // header('Location: dashboard.php');
    } else {
        echo "Invalid credentials. Please try again.";
    }
}
?>
