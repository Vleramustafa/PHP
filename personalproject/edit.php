<?php
    session_start();

    include_once('config.php');
    $id=$_GET['id'];

    $sql="SELECT * FROM books WHERE id=:id";
    $selectUser=$conn->prepare($sql);
    $selectUser->bindParam(':id',$id);
    $selectUser->execute();

    $user_data=$selectUser->fetch();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/font-awesome@5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    /* Header Style */
    .navbar {
      background-color: #9e1c13; /* Red color */
    }
    .navbar-brand {
      color: white;
      font-weight: bold;
    }
    .navbar-nav .nav-link {
      color: white !important;
    }

    /* Sidebar Style */
    #sidebarMenu {
      background-color: #ffffff; /* White color */
      border-right: 2px solid #9e1c13; /* Red border */
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }
    .sidebar .nav-item .nav-link {
      color: #9e1c13;
    }
    .sidebar .nav-item .nav-link.active {
      background-color: #9e1c13;
      color: white;
    }

    /* Main Content Style */
    .main-content {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1, h2 {
      color: #9e1c13;
    }

    .table th, .table td {
      vertical-align: middle;
    }

    .table-striped tbody tr:nth-child(odd) {
      background-color: #f2f2f2;
    }

    .table-hover tbody tr:hover {
      background-color: #ffe6e6;
    }

    .btn-primary {
      background-color: #9e1c13;
      border-color: #9e1c13;
    }

    .btn-primary:hover {
      background-color: #9e1c13;
      border-color: #9e1c13;
    }
    
    .footer {
      background-color:  #9e1c13;
      color: white;
      padding: 10px;
      text-align: center;
      width: 100%;
      bottom: 0;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header class="navbar navbar-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Welcome <?php echo $_SESSION['name']; ?></a>
      <input class="form-control form-control-dark w-50" type="text" placeholder="Search" aria-label="Search">
      <div class="navbar-nav">
        <a class="nav-link" href="logout.php">Sign out</a>
      </div>
    </div>
  </header>

  <!-- Main Layout -->
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashboard.php">
                <i class="fas fa-tachometer-alt"></i> Dashboard
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="main-content">
          <h2>Edit book's details</h2>
          <form action="update.php" method="post">
            <div class="form-floating">
              <input readonly="readonly" type="text" class="form-control" id="floatingInput" placeholder="id" name="id" value="<?php echo $user_data['id'] ?>">
              <label for="floatingInput">ID</label>
            </div>

            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" placeholder="book_title" name="book_title" value="<?php echo $user_data['book_title'] ?>">
              <label for="floatingInput">Book Title</label>
            </div>

            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" placeholder="book_author" name="book_author" value="<?php echo $user_data['book_author'] ?>">
              <label for="floatingInput">Book Author</label>
            </div>

            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" placeholder="book_desc" name="book_desc" value="<?php echo $user_data['book_desc'] ?>">
              <label for="floatingInput">Book Description</label>
            </div>

            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" placeholder="book_price" name="book_price" value="<?php echo $user_data['book_price'] ?>">
              <label for="floatingInput">Book Price</label>
            </div>

            <div class="form-floating">
              <input type="number" class="form-control" id="floatingInput" placeholder="book_stock" name="book_stock" value="<?php echo $user_data['book_stock'] ?>">
              <label for="floatingInput">Book Stock</label>
            </div>

            <br>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit1">Update</button>
          </form>
        </div>
      </main>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
        <p>&copy; 2025 Your Company. All Rights Reserved.</p>
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
  <script>
    feather.replace();
  </script>

</body>
</html>
