<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essence Cosmetics - Products</title>
    <style>
        /* Reset styles */
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
            background-color: #e91e63;
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
            color: #e91e63;
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
            color: #e91e63;
            font-weight: bold;
        }

        footer {
            background-color: #e91e63;
            color: white;
            padding: 20px;
            text-align: center;
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


    <!-- Product Display Section -->
    <div class="product-list">
        <h2>Our Products</h2>
        <div class="products" id="productContainer">
            <!-- Products will be inserted here dynamically via JavaScript -->
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <p>&copy; 2025 Essence Cosmetics. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Array of product objects
        const products = [
            {
                name: "Highlighter",
                price: "$30.00",
                description: "A beautiful highlighter that gives a radiant glow to your skin.",
                image: "img/h.png"
            },
            {
                name: "Eyeshadow Palette",
                price: "$45.00",
                description: "A versatile eyeshadow palette with a variety of shades.",
                image: "img/e.png"
            },
            {
                name: "Primer",
                price: "$20.00",
                description: "A primer that helps your makeup last longer.",
                image: "img/p.png"
            },
            {
                name: "Mascara",
                price: "$15.00",
                description: "A volumizing mascara that enhances your lashes.",
                image: "img/m.png"
            },
            {
                name: "Lip Liner",
                price: "$12.00",
                description: "A smooth lip liner to define your lips.",
                image: "img/l.png"
            }
        ];

        // Function to display products
        function displayProducts() {
            const productContainer = document.getElementById('productContainer');

            products.forEach(product => {
                const productDiv = document.createElement('div');
                productDiv.classList.add('product');
                productDiv.innerHTML = `
                    <img src="${product.image}" alt="${product.name}">
                    <h3>${product.name}</h3>
                    <p>${product.description}</p>
                    <div class="price">${product.price}</div>
                `;
                productContainer.appendChild(productDiv);
            });
        }

        // Call the function to display products
        displayProducts();
    </script>

</body>

</html>
