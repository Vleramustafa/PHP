<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essence | Online Makeup Shopping</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
    /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f9e3e3; /* Soft pink background */
    color: #333;
}

/* Header Styling */
header {
    background-color: #f472b6; /* Light pink */
    color: #fff;
    padding: 10px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header .logo h1 {
    margin-left: 20px;
}

header nav ul {
    display: flex;
    list-style-type: none;
}

header nav ul li {
    margin: 0 15px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
}

header nav ul li a:hover {
    text-decoration: underline;
    color: #fff;
}

/* Product Section */
.products {
    display: flex;
    justify-content: space-around;
    padding: 20px;
    flex-wrap: wrap;
}

.product-card {
    background-color: #fff;
    padding: 20px;
    width: 250px;
    text-align: center;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    transition: all 0.3s ease;
}

.product-card img {
    width: 100%;
    height: auto;
    border-radius: 4px;
}

.product-card h3 {
    margin: 15px 0;
    color: #f472b6; /* Pink heading */
}

.product-card p {
    color: #777;
}

.product-card button {
    padding: 10px;
    background-color: #f472b6; /* Pink button */
    color: #fff;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 4px;
    font-weight: bold;
}

.product-card button:hover {
    background-color: #d663a2; /* Darker pink on hover */
}

/* Footer Styling */
footer {
    text-align: center;
    padding: 10px;
    background-color: #f472b6;
    color: #fff;
    position: absolute;
    bottom: 0;
    width: 100%;
}

/* Modal Styling */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
    padding-top: 60px;
}

.modal-content {
    background-color: #fff;
    margin: 5% auto;
    padding: 20px;
    border-radius: 8px;
    width: 80%;
    max-width: 400px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.modal .close {
    color: #aaa;
    font-size: 28px;
    font-weight: bold;
    position: absolute;
    top: 10px;
    right: 25px;
}

.modal .close:hover,
.modal .close:focus {
    color: #f472b6; /* Pink on hover */
    text-decoration: none;
    cursor: pointer;
}

/* Form Input Styling */
input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 2px solid #f472b6;
    border-radius: 4px;
    font-size: 16px;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
    border-color: #d663a2; /* Darker pink on focus */
}

/* Button Styling */
button[type="submit"] {
    padding: 10px 20px;
    background-color: #f472b6;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #d663a2; /* Darker pink on hover */
}

/* Responsive */
@media (max-width: 768px) {
    header nav ul {
        flex-direction: column;
        align-items: center;
    }

    .products {
        flex-direction: column;
    }

    .product-card {
        width: 100%;
        margin-bottom: 20px;
    }
}

/* Featured Products Section */
.featured-products {
    background-color: #fff5f9; /* Light pink background for the section */
    padding: 40px 20px;
    text-align: center;
}

.featured-products h2 {
    font-size: 2rem;
    color: #f472b6; /* Pink title color */
    margin-bottom: 30px;
}

.featured-card {
    background-color: #fff;
    padding: 20px;
    width: 200px;
    text-align: center;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    margin: 10px;
    transition: all 0.3s ease;
    display: inline-block;
    vertical-align: top;
}

.featured-card img {
    width: 100%;
    height: auto;
    border-radius: 4px;
}

.featured-card h3 {
    margin: 15px 0;
    color: #f472b6; /* Pink heading */
}

.featured-card p {
    color: #777;
}

.featured-card button {
    padding: 10px;
    background-color: #f472b6; /* Pink button */
    color: #fff;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 4px;
    font-weight: bold;
}

.featured-card button:hover {
    background-color: #d663a2; /* Darker pink on hover */
}


</style>
</head>
<body>

<!-- Header -->
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
        <img src="esh3.png" alt="Featured Product 2">
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
