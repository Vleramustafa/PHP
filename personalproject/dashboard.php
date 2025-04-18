<?php

session_start();

    include_once('config.php');
    if(empty($_SESSION['email'])){
        header('Location:login.php');
    }

    $sql="SELECT * FROM users";
    $selectUsers=$conn->prepare($sql);
    $selectUsers->execute();

    $users_data=$selectUsers->fetchAll();

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
        .navbar {
            background-color: #9e1c13; 
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: white !important;
            font-weight: bold;
        }
        #sidebarMenu {
            background-color: #ffffff;
            border-right: 2px solid #9e1c13;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar .nav-item .nav-link {
            color: #9e1c13;
        }
        .sidebar .nav-item .nav-link.active {
            background-color: #9e1c13;
            color: white;
        }
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
            background-color: #9e1c13;
            color: white;
            padding: 10px;
            text-align: center;
            position: relative;
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <header class="navbar navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
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
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                 
                            <li class="nav-item">
                                <a class="nav-link" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="list_books.php">Books</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ordering.php">Orders</a>
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

          
                        <!-- Users Table -->
                        <h2>Users</h2>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Surname</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users_data as $user) { ?>
                                        <tr>
                                            <td><?php echo $user['id']; ?></td>
                                            <td><?php echo $user['name']; ?></td>
                                            <td><?php echo $user['surname']; ?></td>
                                            <td><?php echo $user['email']; ?></td>
                                            <td><a href="editUsers.php?id=<?= $user['id']; ?>">Update</a></td>
                                            <td><a href="deleteUsers.php?id=<?= $user['id']; ?>">Delete</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                 
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

