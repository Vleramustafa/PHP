<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essence | Online Makeup Shopping - Admin Dashboard</title>
    <style>
        /* Resetting some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Header Section */
        header {
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px 0;
            margin-bottom: 20px;
        }

        header .logo {
            font-size: 2rem;
            font-weight: bold;
            color: #e91e63;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        header .logo img {
            height: 40px;
            margin-right: 10px;
        }

        header .logo h1 {
            margin: 0;
        }

        /* Admin Navigation */
        .admin-nav {
            display: flex;
            flex-direction: column;
            width: 250px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
        }

        .admin-nav a {
            color: #333;
            text-decoration: none;
            font-size: 1.2rem;
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s;
        }

        .admin-nav a:hover {
            background-color: #f4f4f4;
        }

        .admin-nav a img {
            width: 20px;
            margin-right: 10px;
        }

        /* Main Content Area */
        .admin-content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Dashboard Section */
        .dashboard {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
            gap: 20px;
        }

        .dashboard-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            width: 250px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .dashboard-card h3 {
            color: #e91e63;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .dashboard-card p {
            font-size: 1.2rem;
            color: #333;
        }

        .dashboard-card .highlight {
            font-size: 2rem;
            color: #e91e63;
            font-weight: bold;
        }

        .dashboard-card img {
            width: 40px;
            margin-bottom: 15px;
        }

        /* Product Table */
        .product-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .product-table th,
        .product-table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .product-table th {
            background-color: #e91e63;
            color: white;
        }

        .product-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Modal Styles (Login / Sign Up) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            width: 400px;
            max-width: 90%;
        }

        .modal-content h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .modal-content input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .modal-content button {
            width: 100%;
            padding: 10px;
            background-color: #e91e63;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .modal-content button:hover {
            background-color: #d81b60;
        }

        .close {
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            top: 10px;
            right: 20px;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        /* Footer Section */
        footer {
            background-color: #e91e63;
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        footer .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        footer .footer-container .address,
        footer .footer-container .social {
            flex: 1;
        }

        footer .footer-container .social a {
            margin: 0 10px;
            text-decoration: none;
            color: white;
            font-size: 1.5rem;
        }

        footer .footer-container .address p {
            margin: 5px 0;
        }

        footer .footer-container .social a:hover {
            color: #f4f4f4;
        }

        footer .footer-container .copyright {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
        }

        .form-signin {
	  width: 100%;
	  max-width: 330px;
	  padding: 15px;
	  margin: auto;
	}

	.form-signin .checkbox {
	  font-weight: 400;
	}
    .form-signin .form-floating:focus-within {
	  z-index: 2;
	}

	.form-signin input[type="email"] {
	  margin-bottom: -1px;
	  border-bottom-right-radius: 0;
	  border-bottom-left-radius: 0;
	}

	.form-signin input[type="password"] {
	  margin-bottom: 10px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
	.form-floating{
		margin: 10px;
    }

    </style>
</head>

<body>

    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="Essence Logo"> <!-- Placeholder Logo -->
            <h1>Essence</h1>
        </div>
    </header>

    <!-- Admin Navigation -->
    <div class="admin-nav">
        <a href="products.php"><img src="img/prod.png" alt="Product Icon">Products</a>
        <a href="#" id="loginLink"><img src="img/login.png" alt="Login Icon">Login</a>
        <a href="#" id="signupLink"><img src="img/login.png" alt="Sign Up Icon">Sign Up</a>
    </div>

    <!-- Main Content Area -->
    <div class="admin-content">
        <!-- Dashboard -->
        <section class="dashboard">
            <div class="dashboard-card">
                <img src="img/sales.png" alt="Sales Icon">
                <h3>Total Sales</h3>
                <p class="highlight">$12,500</p>
            </div>
            <div class="dashboard-card">
                <img src="img/users.png" alt="Users Icon">
                <h3>Total Users</h3>
                <p class="highlight">850</p>
            </div>
            <div class="dashboard-card">
                <img src="img/order.png" alt="Orders Icon">
                <h3>Orders Today</h3>
                <p class="highlight">120</p>
            </div>
        </section>

        <!-- Product Management -->
        <section class="product-management">
            <h2>Manage Products</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Highlighter</td>
                        <td>$30.00</td>
                        <td>50</td>
                        <td><button>Edit</button> <button>Delete</button></td>
                    </tr>
                    <tr>
                        <td>Eyeshadow Palette</td>
                        <td>$45.00</td>
                        <td>30</td>
                        <td><button>Edit</button> <button>Delete</button></td>
                    </tr>
                    <tr>
                        <td>Primer</td>
                        <td>$20.00</td>
                        <td>70</td>
                        <td><button>Edit</button> <button>Delete</button></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeLogin">&times;</span>
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <a href="login.php">Login</a>
            </form>
        </div>
    </div>

    <!-- Sign Up Modal -->
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeSignup">&times;</span>
            <h2>Sign Up</h2>
            <main class="form-signin">
  <form action="register.php" method="post">
    

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Emri" name="emri">
      <label for="floatingInput">Emri</label>
    </div>
     <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password">
      <label for="floatingInput">Password</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password" name="confirm_password">
      <label for="floatingPassword">Confirm Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign up</button>
    <span>Already have an account: </span><a href="login.php">Sign in</a>
  </form>
</main>
        
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="address">
                <h3>Essence Cosmetics</h3>
                <p>123 Makeup Street, Beauty City</p>
                <p>Email: support@essence.com</p>
                <p>Phone: (123) 456-7890</p>
            </div>
            <div class="social">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 Essence Cosmetics. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Open and close modals
        document.getElementById("loginLink").onclick = function () {
            document.getElementById("loginModal").style.display = "block";
        }
        document.getElementById("signupLink").onclick = function () {
            document.getElementById("signupModal").style.display = "block";
        }
        document.getElementById("closeLogin").onclick = function () {
            document.getElementById("loginModal").style.display = "none";
        }
        document.getElementById("closeSignup").onclick = function () {
            document.getElementById("signupModal").style.display = "none";
        }
        window.onclick = function (event) {
            if (event.target === document.getElementById("loginModal")) {
                document.getElementById("loginModal").style.display = "none";
            }
            if (event.target === document.getElementById("signupModal")) {
                document.getElementById("signupModal").style.display = "none";
            }
        }
    </script>

</body>

</html>
