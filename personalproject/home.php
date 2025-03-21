<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .order-btn {
            background-color: #bf160a;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .order-btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
            <div class="col-md-3">
                <div class="card">
                    <img src="images/book1.jpg" class="card-img-top" alt="Book 1">
                    <div class="card-body">
                        <h5 class="card-title">The Great Gatsby</h5>
                        <p class="card-text">F. Scott Fitzgerald</p>
                        <p class="card-text">12.00 €</p>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="images/book2.jpg" class="card-img-top" alt="Book 2">
                    <div class="card-body">
                        <h5 class="card-title">1984</h5>
                        <p class="card-text">George Orwell</p>
                        <p class="card-text">10.00 €</p>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="images/book3.jpg" class="card-img-top" alt="Book 3">
                    <div class="card-body">
                        <h5 class="card-title">To Kill a Mockingbird</h5>
                        <p class="card-text">Harper Lee</p>
                        <p class="card-text">13.00 €</p>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="images/book4.jpg" class="card-img-top" alt="Book 4">
                    <div class="card-body">
                        <h5 class="card-title">It ends with us</h5>
                        <p class="card-text">Colleen Hoover</p>
                        <p class="card-text">18.00 €</p>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="images/book5.jpg" class="card-img-top" alt="Book 4">
                    <div class="card-body">
                        <h5 class="card-title">Harry Potter and the Sorcerer's Stone</h5>
                        <p class="card-text">J.K. Rowling</p>
                        <p class="card-text">12.00 €</p>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="images/book6.jpg" class="card-img-top" alt="Book 4">
                    <div class="card-body">
                        <h5 class="card-title">Pride and Prejudice</h5>
                        <p class="card-text">Jane Austen</p>
                        <p class="card-text">8.00 €</p>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="images/book7.jpg" class="card-img-top" alt="Book 4">
                    <div class="card-body">
                        <h5 class="card-title">The Fault in Our Stars</h5>
                        <p class="card-text">John Green</p>
                        <p class="card-text">9.00 €</p>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="images/book8.jpg" class="card-img-top" alt="Book 4">
                    <div class="card-body">
                        <h5 class="card-title">The Shining</h5>
                        <p class="card-text">Stephen King</p>
                        <p class="card-text">13.00 €</p>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
