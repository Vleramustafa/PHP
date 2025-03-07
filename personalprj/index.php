<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_rental";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch available cars from the database
$sql = "SELECT * FROM cars";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .car-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .car-item:last-child {
            border-bottom: none;
        }
        label, input[type="submit"], select {
            display: block;
            margin: 10px 0;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Rent a Car</h1>

    <form action="rent.php" method="POST">
        <h3>Select a car:</h3>

        <?php
        if ($result->num_rows > 0) {
            // Display each car in the database
            while($row = $result->fetch_assoc()) {
                echo "<div class='car-item'>";
                echo "<input type='radio' name='car_id' value='" . $row['id'] . "' required> " . $row['car_name'] . " " . $row['car_model'] . " - $" . $row['price_per_day'] . " per day";
                echo "</div>";
            }
        } else {
            echo "No cars available.";
        }
        ?>

        <label for="days">Number of days:</label>
        <input type="number" id="days" name="days" min="1" required>

        <input type="submit" value="Calculate Rental Cost">
    </form>
</div>

<?php
$conn->close();
?>

</body>
</html>
