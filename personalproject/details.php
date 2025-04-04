<?php 
	session_start();
  
   include_once('config.php');
   $id = $_GET['id'];
   $_SESSION['book_id'] = $id;
   $sql = "SELECT * FROM books WHERE id=:id";
   $selectBook = $conn->prepare($sql);
   $selectBook->bindParam(":id",$id);
   $selectBook->execute();
   $book_data = $selectBook->fetch();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .form-floating {
            margin: 20px 0;
        }
    </style>
</head>
<body>
<header>
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
</header>

 
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Order Your Book</h1>
                <p class="lead text-muted">You can order your book by clicking the button below</p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="white-box text-center">
                                <img src="img/book1.jpg"<?php echo $book_data['book_cover']; ?>" class="img-responsive" style="width: 70%; height: 20%;">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6">
                            <h4 class="box-title mt-5"><?php echo $book_data['book_title']; ?></h4>
                            <h6 class="text-muted"><?php echo $book_data['book_author']; ?></h6>
                            <p><?php echo $book_data['book_desc']; ?></p>
                            <p class="text-muted"><small>Price: <?php echo $book_data['book_price']; ?> €</small></p>
                            <form action="order.php" method="post">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="quantity" placeholder="Quantity" name="quantity">
                                    <label for="quantity">Quantity</label>
                                </div>
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="date" placeholder="Date" name="order_date">
                                    <label for="date">Order date</label>
                                </div>
                                <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Order</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
