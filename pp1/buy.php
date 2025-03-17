<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['buy'])) {
    $car_id = $_POST['car_id'];
    $buyer = $_SESSION['username'];

    $sql = "INSERT INTO purchases (car_id, buyer) VALUES ('$car_id', '$buyer')";
    if ($conn->query($sql) === TRUE) {
        echo "Car purchased successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Car</title>
</head>
<body>
    <h1>Buy a Car</h1>
    <form action="buy.php" method="POST">
        <label for="car_id">Car ID:</label>
        <input type="text" id="car_id" name="car_id" required>
        <button type="submit" name="buy">Buy</button>
    </form>
    <br>
    <a href="home.php">Back to Home</a>
</body>
</html>