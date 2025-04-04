<?php
session_start();
include_once('config.php');

// Check if the user is logged in, otherwise redirect to the login page
if(empty($_SESSION['username'])){
    header('Location:login.php');
    exit();  // Ensure the script stops executing after the redirect
}

// Get user data from the session
$username = $_SESSION['username']; // Assuming the username is stored in the session
$isAdmin = $_SESSION['is_admin'] ?? false; // Directly check admin status in session
$role = $isAdmin ? 'Admin' : 'User'; // Default to "User" if the user is not an admin

// Fetch all users if needed for other functionalities
$sql = "SELECT * FROM users";
$selectUsers = $conn->prepare($sql);
$selectUsers->execute();

$users_data = $selectUsers->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Essence Cosmetics</title>
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
        <?php if ($_SESSION['is_admin']): ?>
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

        <?php if ($_SESSION['is_admin']): ?>
        <div class="admin-section">
            <h3>Admin Actions</h3>
            <p>As an admin, you can manage products and view user details.</p>
            <a href="admin_dashboard.php" class="button">Go to Admin Dashboard</a>
        </div>
        <?php endif; ?>
    </section>

    <!-- Admin Dashboard Management (If Admin) -->
    <?php if ($_SESSION['is_admin']): ?>
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


<!--<title>Dashboard</title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
  	<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
	<meta name="theme-color" content="#7952b3">
 </head>
 <body>
 
 
 <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><?php echo "Welcome to dashboard ".$_SESSION['username']; ?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-50" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
           <?php if ($_SESSION['is_admin'] == 'true') { ?>
            <li class="nav-item">
              <a class="nav-link" href="home.php">
                <span data-feather="file"></span>
                Home
              </a>
            </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="list_movies.php">
              <span data-feather="file"></span>
              Movies
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bookings.php">
              <span ></span>
              Bookings
            </a>
          </li>
        </ul>
        <?php }else {?>
          <li class="nav-item">
              <a class="nav-link" href="home.php">
               
                Home
              </a>
            </li>
          <li class="nav-item">
          <a class="nav-link" href="bookings.php">
            <span ></span>
            Bookings
          </a>
        </li>
        </ul>
      <?php
      } ?>

        
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        
      </div>

    <?php if ($_SESSION['is_admin'] == 'true') { ?>

      <h2>Users</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Emri</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users_data as $user_data) { ?>

               <tr>
                <td><?php echo $user_data['id']; ?></td>
                <td><?php echo $user_data['name']; ?></td>
                <td><?php echo $user_data['username']; ?></td>
                <td><?php echo $user_data['email']; ?></td>
                <!-- If we want to update a user we need to link into editUsers.php -->
                <td><a href="editUsers.php?id=<?= $user_data['id'];?>">Update</a></td>
                  <!-- If we want to delete a user we need to link into deleteUsers.php -->
                <td><a href="deleteUsers.php?id=<?= $user_data['id'];?>">Delete</a></td>
              </tr>
              
           <?php  } ?>
           
            
          </tbody>
        </table>
      </div>
     <?php  } else {
      
    } ?>
    </main>
  </div>
</div>--!>