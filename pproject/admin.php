<?php
session_start();

// Example of setting session variables upon successful login
$_SESSION['user_id'] = $user_id; // From database or login form
$_SESSION['username'] = $username;
$_SESSION['role'] = $role; // Can be 'user' or 'admin'

// Redirect to dashboard or admin page
header("Location: dashboard.php");
exit;

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Get user information from the session
$username = $_SESSION['username'];
$role = $_SESSION['role'];

// Check for admin role
if ($role !== 'admin') {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Essence Cosmetics</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        header {
            background-color: #eea1c5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 2rem;
        }

        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1rem;
        }

        nav a:hover {
            text-decoration: underline;
        }

        section {
            margin-top: 30px;
        }

        footer {
            background-color: #eea1c5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .button {
            background-color: #eea1c5;
            padding: 10px 20px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .button:hover {
            background-color: #d18d9b;
        }

        .admin-actions {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header>
        <h1>Welcome to the Admin Panel</h1>
    </header>

    <!-- Navigation Section -->
    <nav>
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="logout.php">Logout</a>
    </nav>

    <!-- Admin Panel Content -->
    <section>
        <h2>Admin Actions</h2>
        <p>Hello, <?php echo htmlspecialchars($username); ?>! You are logged in as an Admin.</p>

        <div class="admin-actions">
            <h3>Manage Products</h3>
            <a href="admin_dashboard.php" class="button">Go to Product Management</a>
        </div>

        <div class="admin-actions">
            <h3>Manage Users</h3>
            <a href="manage_users.php" class="button">Manage Users</a>
        </div>

        <div class="admin-actions">
            <h3>View Sales Reports</h3>
            <a href="sales_reports.php" class="button">View Sales</a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Essence Cosmetics. All rights reserved.</p>
    </footer>

</body>

</html>
