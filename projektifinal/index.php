<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restaurant_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();
    $stmt->close();

    echo "<p style='text-align:center; color: #00e676; font-weight:bold;'>Faleminderit që na kontaktuat!</p>";
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoranti - Casa Mia</title>
    <style>
        body {
            margin: 0;
            font-family: 'Merriweather', Georgia, serif;
            background-color: #121212;
            color: #e0e0e0;
        }
        header {
            background-color: #1f1f1f;
            box-shadow: 0 2px 10px rgba(0,0,0,0.7);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            overflow: hidden;
        }
        .logo {
            width: 80px;
            float: left;
        }
        header h1 {
            display: inline-block;
            margin: 0 20px;
            font-size: 28px;
            color: #c62828;
        }
        nav {
            float: right;
            margin-top: 20px;
        }
        nav a {
            margin-left: 20px;
            text-decoration: none;
            color: #e0e0e0;
            font-weight: bold;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #c62828;
        }
        .hero {
            background: url('menuifatri_files/banner.jpg') no-repeat center center/cover;
            height: 400px;
            color: #fff;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .hero h2 {
            font-size: 42px;
            margin-bottom: 10px;
        }
        .hero p {
            font-size: 20px;
        }
        .btn {
            background-color: #8b0000;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #a30000;
        }
        .menu-section {
            padding: 50px 0;
            background-color: #1a1a1a;
        }
        .menu-section h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 32px;
            color: #ff5252;
        }
        .menu-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }
        .menu-item {
            background: #2a2a2a;
            border-radius: 10px;
            padding: 15px;
            width: 250px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }
        .menu-item img {
            width: 100%;
            border-radius: 8px;
        }
        .menu-item h3 {
            margin: 15px 0 5px;
            font-size: 20px;
            color: #f44336;
        }
        .menu-item span {
            font-weight: bold;
            color: #ffc107;
            font-size: 18px;
        }
        .contact-section {
            background-color: #1a1a1a;
            padding: 50px 0;
        }
        .contact-section h2 {
            text-align: center;
            font-size: 30px;
            color: #e53935;
            margin-bottom: 30px;
        }
        form {
            max-width: 600px;
            margin: auto;
            background: #2b2b2b;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.5);
        }
        form label {
            display: block;
            margin: 10px 0 5px;
            color: #ddd;
        }
        form input,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #444;
            background-color: #1f1f1f;
            color: #eee;
        }
        form input:focus,
        form textarea:focus {
            border-color: #ff5252;
            outline: none;
        }
        footer {
            background-color: #000;
            color: #999;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <img src="menuifatri_files/logo.jpg" alt="Logo Casa Mia" class="logo">
        <h1>Casa Mia</h1>
        <nav>
            <a href="#home">Kryefaqja</a>
            <a href="#menu">Menyja</a>
            <a href="#contact">Kontakti</a>
        </nav>
    </div>
</header>

<section id="home" class="hero">
    <div class="hero-content">
        <h2>Mirësevini në Restorantin Tonë</h2>
        <p>Ushqim i shijshëm, i përgatitur me dashuri dhe përbërësit më të mirë.</p>
        <a href="#menu" class="btn">Shiko Menynë</a>
    </div>
</section>

<section id="menu" class="menu-section">
    <div class="container">
        <h2>Menu </h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="menuifatri_files/menuiftari.jpg" alt="Pjata 1">
                <h3>Oferta Ditore</h3>
            </div>
            <div class="menu-item">
                <img src="menuifatri_files/menuiftari1.jpg" alt="Pjata 4">
                <h3>Menu Tradicionale</h3>
            </div>
            <div class="menu-item">
                <img src="menuifatri_files/menuiftari2.jpg" alt="Pjata 5">
                <h3>Menu e Pergjithshme</h3>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact-section">
    <div class="container">
        <h2>Kontaktoni Me Ne</h2>
        <form action="" method="POST">
            <label for="name">Emri & Mbiemri</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Emaili</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Mesazhi Juaj</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit" class="btn">Dërgo Mesazhin</button>
        </form>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; 2025 Casa Mia</p>
    </div>
</footer>

</body>
</html>
