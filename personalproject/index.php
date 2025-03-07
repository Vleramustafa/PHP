<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Essence | Online Makeup Shopping</title>
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
        }

        /* Navigation Bar */
        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 10px;
            background-color: #e91e63;
            padding: 10px 0;
        }

        nav a {
            color: white;
            font-size: 1.1rem;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 25px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #d81b60;
        }

        nav .search-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 10px;
            border-radius: 25px;
            width: 300px;
        }

        nav .search-bar input[type="text"] {
            width: 80%;
            padding: 8px;
            border: none;
            border-radius: 25px;
        }

        nav .search-bar button {
            width: 15%;
            padding: 8px;
            border: none;
            background-color: #e91e63;
            color: white;
            border-radius: 50%;
            cursor: pointer;
        }

        nav .search-bar button:hover {
            background-color: #d81b60;
        }

        .cart-icon {
            font-size: 1.5rem;
            color: white;
            margin-left: 15px;
            cursor: pointer;
        }

        /* Main content section */
        .featured-products {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .product-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .product-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-card h3 {
            color: #333;
            font-size: 1.2rem;
            margin-top: 10px;
        }

        .product-card .price {
            color: #e91e63;
            font-size: 1.1rem;
            margin-top: 5px;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        ./* Categories Section */
.categories {
    background-color: #fff5f9; /* Light pink background for the section */
    padding: 40px 20px;
    text-align: center;
}

.categories h2 {
    font-size: 2rem;
    color: #f472b6; /* Pink title color */
    margin-bottom: 30px;
}

.category-list {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

.category-item {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    font-size: 1.1rem;
    color: #f472b6; /* Pink text */
    transition: all 0.3s ease;
    width: 180px;
    text-align: center;
}

.category-item:hover {
    background-color: #f472b6; /* Pink background on hover */
    color: #fff; /* White text when hovering */
}

@media (max-width: 768px) {
    .category-item {
        width: 150px; /* Reduce the width on smaller screens */
    }
}

        /* Footer Section */
        footer {
            background-color: #222;
            color: #fff;
            padding: 40px 0;
            text-align: center;
        }

        footer .social-icons a {
            margin: 0 15px;
            color: #fff;
            font-size: 1.5rem;
            text-decoration: none;
        }

        footer .social-icons a:hover {
            color: #e91e63;
        }

        footer p {
            margin-top: 20px;
            font-size: 1rem;
        }

        /* Modal (Login / Sign Up) */
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
    </style>
</head>

<body>

    <!-- Header Section -->
    <header>
    <div class="logo">
        <h1>Essence</h1>
        <p>Your Beauty, Your Essence</p>
    </div>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#" id="loginLink">Login</a></li>
            <li><a href="#" id="signupLink">Sign Up</a></li>
        </ul>
    </nav>
</header>

<!-- New Section: Featured Products -->
<section class="featured-products">
    <h2>Featured Products</h2>
    <div class="featured-card">
        <img src="h.png" alt="Featured Product 1">
        <h3>Highlighter</h3>
        <p>$30.00</p>
        <button>Shop Now</button>
    </div>
    <div class="featured-card">
        <img src="https://via.placeholder.com/200x200" alt="Featured Product 2">
        <h3>Eyeshadow Palette</h3>
        <p>$45.00</p>
        <button>Shop Now</button>
    </div>
    <div class="featured-card">
        <img src="https://via.placeholder.com/200x200" alt="Featured Product 3">
        <h3>Primer</h3>
        <p>$20.00</p>
        <button>Shop Now</button>
    </div>
</section>

<!-- New Section: Categories -->
<section class="categories">
    <h2>Shop By Categories</h2>
    <div class="category-list">
        <div class="category-item">Face Makeup</div>
        <div class="category-item">Eye Makeup</div>
        <div class="category-item">Lip Makeup</div>
        <div class="category-item">Skincare</div>
    </div>
</section>

<!-- Existing Product Section -->
<section class="products">
    <div class="product-card">
        <img src="https://via.placeholder.com/200x200" alt="Product 1">
        <h3>Foundation</h3>
        <p>$25.00</p>
        <button>Buy Now</button>
    </div>
    <div class="product-card">
        <img src="https://via.placeholder.com/200x200" alt="Product 2">
        <h3>Lipstick</h3>
        <p>$18.00</p>
        <button>Buy Now</button>
    </div>
    <div class="product-card">
        <img src="https://via.placeholder.com/200x200" alt="Product 3">
        <h3>Blush</h3>
        <p>$15.00</p>
        <button>Buy Now</button>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2025 Essence Makeup | All Rights Reserved</p>
</footer>

<!-- Login Modal -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeLogin">&times;</span>
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</div>

<!-- Sign Up Modal -->
<div id="signupModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeSignup">&times;</span>
        <h2>Sign Up</h2>
        <form action="signup.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</div>

<script>
    // Open and close modals
    document.getElementById("loginLink").onclick = function() {
        document.getElementById("loginModal").style.display = "block";
    }
    document.getElementById("signupLink").onclick = function() {
        document.getElementById("signupModal").style.display = "block";
    }
    document.getElementById("closeLogin").onclick = function() {
        document.getElementById("loginModal").style.display = "none";
    }
    document.getElementById("closeSignup").onclick = function() {
        document.getElementById("signupModal").style.display = "none";
    }
    window.onclick = function(event) {
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