<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <nav>
        <div class="logo">
            <a href="index.php">My Website</a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="menu-icon" id="menu-icon">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>

<script>
    const menuIcon = document.getElementById("menu-icon");
    menuIcon.addEventListener("click", () => {
        document.querySelector(".nav-links").classList.toggle("active");
    });
</script>
