<?php
session_start();
$id = $_GET['id'];
include_once('config.php');

// Use the correct table: 'products'
$sql = "SELECT * FROM products WHERE id = :id";
$selectProduct = $conn->prepare($sql);
$selectProduct->bindParam(':id', $id);
$selectProduct->execute();

$product_data = $selectProduct->fetch();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* Base Colors */
    :root {
      --primary-color: #eea1c5; /* Soft Pink */
      --secondary-color: #333; /* Dark Gray */
      --background-color: #f4f4f4; /* Light Gray */
      --button-hover-color: #e487a5; /* Hovered Pink */
      --navbar-bg-color: #eea1c5;
      --sidebar-bg-color: #f8f9fa;
      --footer-bg-color: #333;
      --link-color: #333;
      --link-hover-color: #555;
    }

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: var(--background-color);
    }

    header {
        background-color: var(--navbar-bg-color);
        color: white;
        padding: 20px;
        text-align: center;
    }

    nav {
        text-align: center;
        padding: 10px;
        background-color: var(--secondary-color);
    }

    nav a {
        color: white;
        margin: 0 15px;
        text-decoration: none;
    }

    nav a:hover {
        text-decoration: underline;
        color: var(--link-hover-color);
    }

    footer {
        text-align: center;
        padding: 10px;
        background-color: var(--footer-bg-color);
        color: white;
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    section {
        padding: 20px;
        margin: 20px;
    }

    input {
        padding: 10px;
        margin: 10px;
        width: 100%;
        box-sizing: border-box;
    }

    button {
        padding: 10px;
        background-color: var(--primary-color);
        color: white;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        background-color: var(--button-hover-color);
    }

    .form-floating {
        margin-bottom: 15px;
    }

    .container-fluid {
        padding: 20px;
    }

    .navbar {
        background-color: var(--navbar-bg-color);
    }

    .sidebar {
        background-color: var(--sidebar-bg-color);
        padding-top: 20px;
    }

    .sidebar .nav-link {
        padding: 10px;
        color: var(--link-color);
    }

    .sidebar .nav-link:hover {
        background-color: #ddd;
        color: var(--link-hover-color);
    }
  </style>
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
    <?php echo "Welcome to dashboard " . $_SESSION['username']; ?>
  </a>
  <input class="form-control form-control-dark w-50" type="text" placeholder="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">Dashboard</a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <h2 class="mt-4">Edit Product Details</h2>
      <form action="update.php" method="post">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="id" value="<?php echo $product_data['id']; ?>" readonly>
          <label>ID</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="product_name" value="<?php echo $product_data['product_name']; ?>">
          <label>Product Name</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="product_quality" value="<?php echo $product_data['product_quality']; ?>">
          <label>Product Quality</label>
        </div>

        <div class="form-floating mb-3">
          <input type="number" class="form-control" name="product_rating" value="<?php echo $product_data['product_rating']; ?>">
          <label>Product Rating</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="product_image" value="<?php echo $product_data['product_image']; ?>">
          <label>Product Image URL</label>
        </div>

        <button class="button" type="submit" name="submit1">Update</button>
      </form>
    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
