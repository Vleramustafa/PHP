<?php
if(empty($_SESSION['username'])){
    header('Location:login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $car_name = $_POST['car_name'];
    $car_value = $_POST['car_value'];
    $user_adress = $_POST['user_adress'];
    $user_phoneNumber = $_POST['user_phoneNumber'];

    // Simulate saving the purchase to a database
    $message = "Thank you, $car_name has been successfully purchased!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy a Car</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
        }
        label, input, select {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        button {
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .message {
            margin-top: 20px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>
    <h1>Buy Your Dream Car</h1>
    <form method="POST" action="">
        <label for="buyer_name">Your Name:</label>
        <input type="text" id="buyer_name" name="buyer_name" required>

        <label for="buyer_email">Your Email:</label>
        <input type="email" id="buyer_email" name="buyer_email" required>

        <label for="car_model">Select Car Model:</label>
        <select id="car_model" name="car_model" required>
            <option value="Tesla Model S">Tesla Model S</option>
            <option value="Ford Mustang">Ford Mustang</option>
            <option value="Chevrolet Camaro">Chevrolet Camaro</option>
            <option value="BMW 3 Series">BMW 3 Series</option>
        </select>

        <button type="submit">Buy Now</button>
    </form>

    <?php if (!empty($message)): ?>
        <div class="message">
            <?php echo htmlspecialchars($message); ?>
        </div>
    <?php endif; ?>
</body>
</html>