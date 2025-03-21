<?php
// Start the session to use session variables
session_start();

// Include the database connection file (config.php should define the $pdo variable)
include('config.php'); 

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username is not empty
    if (!empty($username)) {
        // Prepare SQL query to check if the user exists in the database
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $pdo->prepare($sql);

        // Bind the username parameter and execute the query
        try {
            $stmt->execute(['username' => $username]);
            $user = $stmt->fetch();

            // Check if a user was found and if the password matches
            if ($user && password_verify($password, $user['password'])) {
                // Set session variables after successful login
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                
                // Redirect to the homepage after successful login
                header("Location: index.html");
                exit;
            } else {
                // Set error message if invalid credentials
                $error_message = "Invalid username or password!";
            }
        } catch (PDOException $e) {
            // Handle any database connection or query issues
            $error_message = "Database error: " . $e->getMessage();
        }
    } else {
        $error_message = "Please enter a username.";
    }
}
?>

<!-- Frontend Login Form (if login fails) -->
<div class="modal-content">
    <span class="close" id="closeLogin">&times;</span>
    <h2>Login</h2>
    <?php if (isset($error_message)) { echo "<p style='color: red;'>$error_message</p>"; } ?>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>
