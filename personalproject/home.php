<?php
include_once('config.php');

$sql = "SELECT * FROM books";
$selectBooks = $conn->prepare($sql);
$selectBooks->execute();
$books_data = $selectBooks->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .order-btn {
            background-color: #bf160a;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            width: 100%;
        }
        .order-btn:hover {
            background-color: darkred;
        }
        .stock-info {
            font-size: 0.8rem;
            color: gray;
        }
        .btn-group .btn {
            width: 48%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Orders</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Sign In</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <h2>Best Sellers</h2>
        <div class="row">
            <?php foreach ($books_data as $book) { ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="book_images/<?php echo $book['book_cover']; ?>" class="card-img-top" alt="<?php echo $book['book_title']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $book['book_title']; ?></h5>
                            <p class="card-text"><?php echo $book['book_author']; ?></p>
                            <p class="card-text"><?php echo $book['book_price']; ?> €</p>
                            <p class="stock-info">In stock: <?php echo $book['book_stock']; ?></p>

                            <!-- View and Edit buttons instead of Order button -->
                            <div class="btn-group">
                                <a href="details.php?id=<?php echo $book['id']; ?>" class="btn btn-sm btn-outline-secondary">View</a>
                                <a href="edit.php?id=<?php echo $book['id']; ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
