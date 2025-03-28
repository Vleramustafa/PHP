<?php
// Start the session
session_start();

// Include the database configuration file
include('config.php');

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    // If the user is not logged in or not an admin, redirect to the login page
    header('Location: login.php');
    exit();
}

// Check if the user ID to delete is set in the URL
if (isset($_GET['id'])) {
    $userId = intval($_GET['id']);  // Sanitize the user ID by converting it to an integer

    // Prepare the SQL query to delete the user
    $sql = "DELETE FROM users WHERE id = ?";

    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind the parameter (user ID) to the statement
        $stmt->bind_param("i", $userId);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to a success page or the users list page
            header('Location: userlist.php');  // Change this to your page with user listings
            exit();
        } else {
            // Error executing the delete query
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Error preparing the statement
        echo "Error: " . $conn->error;
    }
} else {
    // If no user ID is provided, redirect to the user list page
    header('Location: userlist.php');
    exit();
}

// Close the database connection
$conn->close();
?>
