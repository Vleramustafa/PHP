<?php 
/* Creating a session based on a session identifier, passed via a GET or POST request.
   Creating a form which users will use to give some book data, then we will post those data into addBook.php file
*/

  session_start();
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
            border-right: 2px solid  #9e1c13; /* Red border */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar .nav-item .nav-link {
            color:  #9e1c13;
        }
        .sidebar .nav-item .nav-link.active {
            background-color:  #9e1c13;
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
            color:  #9e1c13;
        }

        .form-floating {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color:  #9e1c13;
            border-color:  #9e1c13;
        }

        .btn-primary:hover {
            background-color:  #9e1c13;
            border-color:  #9e1c13;
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
            <a class="navbar-brand" href="#"><?php echo "Welcome to dashboard ".$_SESSION['name']; ?></a>
            <input class="form-control form-control-dark w-50" type="text" placeholder="Search" aria-label="Search">
            <div class="navbar-nav">
                <a class="nav-link" href="logout.php">Sign out</a>
            </div>
        </div>
    </header>

    <!-- Main Layout -->
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
            <a class="nav-link" href="list_books.php">
              <span data-feather="file"></span>
              Books
            </a>
          </li>
        <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="orders.php">
              <span ></span>
              Orders
            </a>
          </li>
        </ul>



        </div>
    </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="main-content">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Dashboard</h1>
                    </div>

                    <!-- Books Form -->
                    <h2>Books</h2>
                    <form action="addBook.php" method="post" enctype="multipart/form-data">

                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Book Name" name="book_title" required>
                            <label for="floatingInput">Book Name</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Book Author" name="book_author" required>
                            <label for="floatingInput">Book Author</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Book Description" name="book_desc" required>
                            <label for="floatingInput">Book Description</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Book Price" name="book_price" required>
                            <label for="floatingInput">Book Price</label>
                        </div>

                        <div class="form-floating">
                            <input type="number" class="form-control" id="floatingInput" placeholder="Book Stock" name="book_stock" required>
                            <label for="floatingInput">Book Stock</label>
                        </div>

                        <div class="form-floating">
                            <input type="file" class="form-control" id="floatingInput" placeholder="Book Cover" name="book_cover" required>
                            <label for="floatingInput">Book Cover</label>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit"> Add Book </button> 
                    </form>

                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Your Company. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
