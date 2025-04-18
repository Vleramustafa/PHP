<?php
session_start();
include_once('config.php');

// // Redirect if not logged in
// if (empty($_SESSION['username'])) {
//     header('Location: login.php');
//     exit();
// }

// User session info
// $username = $_SESSION['username'];
// $isAdmin = $_SESSION['is_admin'] ?? false;
// $role = $isAdmin ? 'Admin' : 'User';

// Get all users (only needed for admin)
$users_data = [];
$products_data = [];
// if ($isAdmin) {
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $users_data = $stmt->fetchAll();

    // Fetch products
    $sqlProducts = "SELECT * FROM products";
    $stmtProducts = $conn->prepare($sqlProducts);
    $stmtProducts->execute();
    $products_data = $stmtProducts->fetchAll();
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Essence Cosmetics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Your CSS styles here */
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
        <!-- <?php if ($_SESSION['is_admin']): ?>
            <a href="admin.php">Admin Panel</a>
        <?php endif; ?> -->
        <a href="logout.php">Logout</a>
    </nav>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Navigation -->
        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="pt-3">
                
                </ul>
            </div>
        </nav>

        <!-- Main Dashboard Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-4">
            <h1 class="h2">Dashboard</h1>
            <!-- <p class="lead">You are logged in as <strong><?php echo htmlspecialchars($role); ?></strong>.</p> -->

            <!-- <?php if ($isAdmin): ?> -->
                <!-- Admin - User Management Table -->
                <h2 class="mt-5">Manage Users</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users_data as $user): ?>
                            <tr>
                                <td><?= $user['id']; ?></td>
                                <td><?= htmlspecialchars($user['name']); ?></td>
                                <td><?= htmlspecialchars($user['username']); ?></td>
                                <td><?= htmlspecialchars($user['email']); ?></td>
                                <td><a href="editUsers.php?id=<?= $user['id']; ?>">Update</a></td>
                                <td><a href="deleteUsers.php?id=<?= $user['id']; ?>">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- Admin - Product Form -->
                <h2 class="mt-5">Add New Product</h2>
                <form action="addProduct.php" method="post" enctype="multipart/form-data" class="mb-4">
                    <div class="mb-2">
                        <input type="text" class="form-control" name="product_name" placeholder="Product Name" required>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="product_desc" placeholder="Product Description" required>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="product_quality" placeholder="Product Quality" required>
                    </div>
                    <div class="mb-2">
                        <input type="number" class="form-control" name="product_rating" placeholder="Product Price" required>
                    </div>
                    <div class="mb-2">
                        <input type="file" class="form-control" name="product_image" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add Product</button>
                </form>

                <!-- Admin - Product Table -->
                <h2 class="mt-5">Manage Products</h2>
                <div class="table-responsive">

                </div>

                <?php else: ?>
    <!-- Regular User Content -->
    <div class="alert alert-info">
        As a regular user, you can view and book products from the Products page.
    </div>

    <!-- Product List for Regular Users -->
    <h2 class="mt-4">Available Products</h2>
    <div class="table-responsive">
    <table class="table table-bordered table-sm">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quality</th>
        <th>Rating</th>
        <th>Image</th>
        <th>Add</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>

    <!-- Add Product Row -->
     <a href="products.php" class="btn btn-primary btn-sm">Add</a>
 

    <!-- Existing Products -->
    <?php foreach ($products_data as $product): ?>
        <tr>
            <td><?= $product['id']; ?></td>
            <td><?= htmlspecialchars($product['product_name']); ?></td>
            <td><?= htmlspecialchars($product['product_quality']); ?></td>
            <td><?= htmlspecialchars($product['product_rating']); ?></td>
            <td><img src="<?= htmlspecialchars($product['product_image']); ?>" alt="Product Image" width="50"></td>

            <td>–</td> <!-- Add not needed for existing -->
            <td><a href="edit.php?id=<?= $product['id']; ?>">Edit</a></td>
            <td>
                <a href="delete.php?id=<?= $product['id']; ?>" onclick="return confirm('Are you sure?');">
                    Delete
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


    </div>
<?php endif; ?>

        </main>
    </div>
</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
