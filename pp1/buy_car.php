<?php
session_start();

include_once('config.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $car_name = isset($_POST['car_name']) ? $_POST['car_name'] : '';
    $car_value = isset($_POST['car_value']) ? $_POST['car_value'] : '';
    $user_adress = isset($_POST['user_adress']) ? $_POST['user_adress'] : '';
    $user_phoneNumber = isset($_POST['user_phoneNumber']) ? $_POST['user_phoneNumber'] : '';
    $payment_method = isset($_POST['payment_method']) ? $_POST['payment_method'] : '';

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
        <label for="car_name">Car Name:</label>
        <select id="car_name" name="car_name" required>
            <option value="BMW">BMW X6</option>
            <option value="AUDI">AUDI R8</option>
            <option value="MERCEDES">MERCEDES GLC</option>
            <option value="PORSCHE">PORSCHE 911</option>
        </select>

    <label for="user_adress">Your Address:</label>
    <input type="text" id="user_adress" name="user_adress" required>

    <label for="user_phoneNumber">Your Phone Number:</label>
    <input type="tel" id="user_phoneNumber" name="user_phoneNumber" required>

    <label for="payment_method">Payment Method:</label>
    <select id="payment_method" name="payment_method" required>
        <option value="credit_card">Credit Card</option>
        <option value="paypal">PayPal</option>
        <option value="bank_transfer">Bank Transfer</option>
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