<?php
// Start session and check if user is logged in
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Get user information from the session
$username = $_SESSION['username'];
$role = $_SESSION['role'];

// Check for admin role
$isAdmin = ($role === 'admin');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Essence Cosmetics</title>
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

        form {
            margin-bottom: 20px;
        }

        input, button {
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        button {
            background-color: #eea1c5;
            color: white;
            border: none;
        }

        button:hover {
            background-color: #d18d9b;
        }

        .product-list {
            list-style-type: none;
        }

        .product-item {
            margin: 10px 0;
        }

        footer {
            background-color: #eea1c5;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header>
        <h1>Welcome to the Dashboard</h1>
    </header>

    <!-- Navigation Section -->
    <nav>
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <?php if ($isAdmin): ?>
            <a href="admin.php">Admin Panel</a>
        <?php endif; ?>
        <a href="logout.php">Logout</a>
    </nav>

    <!-- Dashboard Section -->
    <section>
        <h2>Dashboard</h2>
        <div class="welcome-message">
            Hello, <?php echo htmlspecialchars($username); ?>!
        </div>
        <div class="role-info">
            You are logged in as: <strong><?php echo htmlspecialchars($role); ?></strong>
        </div>

        <?php if ($isAdmin): ?>
        <div class="admin-section">
            <h3>Admin Actions</h3>
            <p>As an admin, you can manage products and view user details.</p>
            <a href="admin_dashboard.php" class="button">Go to Admin Dashboard</a>
        </div>
        <?php endif; ?>
    </section>

    <!-- Admin Dashboard Management (If Admin) -->
    <?php if ($isAdmin): ?>
    <section>
        <h2>Manage Products</h2>
        <form id="addProductForm">
            <input type="text" id="productName" placeholder="Product Name" required>
            <input type="text" id="productDescription" placeholder="Product Description" required>
            <input type="number" id="productPrice" placeholder="Product Price" required>
            <button type="submit">Add Product</button>
        </form>

        <h3>Product List</h3>
        <ul id="productList" class="product-list">
            <!-- Product items will be displayed here -->
        </ul>
    </section>
    <?php endif; ?>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Essence Cosmetics. All rights reserved.</p>
    </footer>

</body>

</html>
