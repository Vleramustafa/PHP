<?php

session_start();

include_once('config.php');

$id=$_GET['id'];

$sql="SELECT * FROM users WHERE id=:id";

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
    <title>Edit User</title>
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
        }
        .navbar-brand{
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
            color: #9e1c13;
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
        .btn-primary {
            background-color: #9e1c13;
            border-color: #9e1c13;
        }
        .btn-primary:hover {
            background-color: #7a1610;
        }
    </style>
</head>
<body>
    <header class="navbar navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <div class="navbar-nav">
                <a class="nav-link" href="logout.php">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
         
        <main class="col-md-9 col-lg-10 ms-auto p-4">
            <h2>Edit User's Details</h2>
            <div class="table-responsive">
                <form action="updateUsers.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="Id" name="id" value="<?php echo $user_data['id']; ?>" readonly>
                        <label for="floatingInput">Id</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name" value="<?php echo $user_data['name']; ?>">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Surname" name="surname" value="<?php echo $user_data['surname']; ?>">
                        <label for="floatingInput">Surname</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email" value="<?php echo $user_data['email']; ?>">
                        <label for="floatingInput">Email</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Change</button>
                </form>
            </div>
        </main>
    </div>
</div>

    <footer class="footer">
        <p class="text-center mt-3">&copy; 2025 Your Company. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>