<?php
include_once('config.php');

if (isset($_POST['submit'])) {

    // Retrieve form values
    $name = $_POST['name'] ?? '';  // Using null coalescing operator for safety
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $tempPass = $_POST['password'] ?? '';
    $tempConfirm = $_POST['confirm_password'] ?? '';

    // Hash the passwords
    $password = password_hash($tempPass, PASSWORD_DEFAULT);
    $confirm_password = password_hash($tempConfirm, PASSWORD_DEFAULT);

    // Check if any required fields are empty
    $missingFields = [];

    if (empty($name)) $missingFields[] = 'Name';
    if (empty($username)) $missingFields[] = 'Username';
    if (empty($email)) $missingFields[] = 'Email';
    if (empty($tempPass)) $missingFields[] = 'Password';
    if (empty($tempConfirm)) $missingFields[] = 'Confirm Password';

    // If there are missing fields, output which ones
    if (!empty($missingFields)) {
        echo "You have not filled in the following fields: " . implode(', ', $missingFields);
    } else {
        // Insert into database
        $sql = "INSERT INTO users(name, username, email, password, confirm_password) 
                VALUES (:name, :username, :email, :password, :confirm_password)";

        $insertSql = $conn->prepare($sql);

        // Bind the form data to the SQL statement
        $insertSql->bindParam(':name', $name);
        $insertSql->bindParam(':username', $username);
        $insertSql->bindParam(':email', $email);
        $insertSql->bindParam(':password', $password);
        $insertSql->bindParam(':confirm_password', $confirm_password);

        // Execute the query
        $insertSql->execute();

        // Redirect to login page after successful insert
        header("Location: login.php");
        exit();
    }
}
?>
