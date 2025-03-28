<?php
include_once('config.php');

// Check if the form was submitted
if (isset($_POST['submit'])) {
    // Get the data from the form
    $id = $_POST['id'];
    $name = $_POST['name'];  // Fix name mismatch from 'username' to 'name'
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Prepare the UPDATE SQL query
    $sql = "UPDATE users SET name = :name, username = :username, email = :email WHERE id = :id";

    // Prepare the statement
    $prep = $conn->prepare($sql);

    // Bind the parameters
    $prep->bindParam(":id", $id);
    $prep->bindParam(":name", $name);
    $prep->bindParam(":username", $username);
    $prep->bindParam(":email", $email);

    // Execute the query
    if ($prep->execute()) {
        // If successful, redirect to the dashboard
        header('Location: dashboard.php');
    } else {
        // Handle the case where the query failed
        echo "Error updating user details.";
    }
}
?>
