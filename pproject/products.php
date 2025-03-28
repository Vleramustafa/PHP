<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essence Cosmetics - Products</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Include your existing styles here */
        
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

        header {
            background-color: #eea1c5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header .logo img {
            height: 40px;
            margin-right: 10px;
        }

        header h1 {
            font-size: 2rem;
            margin: 0;
        }
        nav {
            background-color: #333;
            padding: 15px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1rem;
            padding: 10px;
        }

        nav a:hover {
            background-color: #eea1c5;
            color: white;
            border-radius: 5px;
        }

        .product-list {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .product {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product h3 {
            color: #eea1c5;
            margin-top: 10px;
            font-size: 1.2rem;
        }

        .product p {
            color: #777;
            font-size: 1rem;
            margin: 10px 0;
        }

        .product .price {
            font-size: 1.5rem;
            color: #eea1c5;
            font-weight: bold;
        }

        .filter-section {
            text-align: center;
            margin-bottom: 20px;
        }

        .filter-section input {
            padding: 10px;
            margin-right: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .filter-section button {
            padding: 10px;
            background-color: #eea1c5;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }

        footer {
            background-color: #eea1c5;
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #eea1c5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header .logo img {
            height: 40px;
            margin-right: 10px;
        }

        header h1 {
            font-size: 2rem;
            margin: 0;
        }

        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1rem;
        }

        nav a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #eea1c5;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: auto; /* Pushes footer to the bottom of the page */
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <header>
        <div class="logo">
            <h1>Essence Cosmetics</h1>
        </div>
    </header>

    <!-- Navigation Section -->
    <nav>
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="signup.php">Sign Up</a>
        <a href="products.php">Products</a>
        <a href="admin.php">Admin</a>
    </nav>

    <!-- Product Display Section -->
    <div class="product-list">
        <h2>Our Products</h2>
        

        <!-- Filter Section -->
        <div class="filter-section">
            <label for="priceFilter">Filter by Price: </label>
            <input type="number" id="priceFilter" placeholder="Max Price">
            <button onclick="filterProducts()">Apply Filter</button>
        </div>
        <h2>Products</h2>
        <div class="products" id="productContainer">
    <div class="product">
        <img src="img/h.png" alt="Highlighter">
        <h3>Highlighter</h3>
        <p>A beautiful highlighter that gives a radiant glow to your skin.</p>
        <div class="price">$30.00</div>
    </div>
    <div class="product">
        <img src="img/e.png" alt="Eyeshadow Palette">
        <h3>Eyeshadow Palette</h3>
        <p>A versatile eyeshadow palette with a variety of shades.</p>
        <div class="price">$45.00</div>
    </div>
    <div class="product">
        <img src="img/p.png" alt="Primer">
        <h3>Primer</h3>
        <p>A primer that helps your makeup last longer.</p>
        <div class="price">$20.00</div>
    </div>
    <div class="product">
        <img src="img/m.png" alt="Mascara">
        <h3>Mascara</h3>
        <p>A volumizing mascara that enhances your lashes.</p>
        <div class="price">$15.00</div>
    </div>
    <div class="product">
        <img src="img/l.png" alt="Lip Liner">
        <h3>Lip Liner</h3>
        <p>A smooth lip liner to define your lips.</p>
        <div class="price">$12.00</div>
    </div>
</div>


<form action="addProduct.php" method="post" enctype="multipart/form-data">

    <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Product Name" name="product_name" >
        <label for="floatingInput">Product Name</label>
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Product Description" name="product_desc" >
        <label for="floatingInput">Product Description</label>
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Product Quality" name="product_quality" >
        <label for="floatingInput">Product Quality</label>
    </div>
    <div class="form-floating">
        <input type="number" class="form-control" id="floatingInput" placeholder="Product Rating" name="product_rating" >
        <label for="floatingInput">Product Rating</label>
    </div>
    <div class="form-floating">
        <input type="file" class="form-control" id="floatingInput" placeholder="Product Image" name="product_image" >
        <label for="floatingInput">Product Image</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Add Product</button> 
</form>


        <!-- Products Grid -->
        <div class="products" id="productContainer">
            <?php
            // Display products
            foreach ($products as $product) {
                echo '<div class="product">';
                echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                echo '<h3>' . $product['name'] . '</h3>';
                echo '<p>' . $product['description'] . '</p>';
                echo '<div class="price">$' . number_format($product['price'], 2) . '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    
    <script>
        

        function filterProducts() {
            const maxPrice = parseFloat(document.getElementById('priceFilter').value);
            const products = <?php echo json_encode($products); ?>;
            const filteredProducts = products.filter(product => product.price <= maxPrice);

            const productContainer = document.getElementById('productContainer');
            productContainer.innerHTML = ''; // Clear previous content

            filteredProducts.forEach(product => {
                const productDiv = document.createElement('div');
                productDiv.classList.add('product');
                productDiv.innerHTML = `
                    <img src="${product.image}" alt="${product.name}">
                    <h3>${product.name}</h3>
                    <p>${product.description}</p>
                    <div class="price">$${product.price.toFixed(2)}</div>
                `;
                productContainer.appendChild(productDiv);
            });
        }
    </script>

</body>

</html>
