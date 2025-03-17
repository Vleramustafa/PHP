<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rate'])) {
    $car_id = $_POST['car_id'];
    $rating = $_POST['rating'];

    $sql = "INSERT INTO ratings (car_id, rating) VALUES ('$car_id', '$rating')";
    if ($conn->query($sql) === TRUE) {
        echo "Car rated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>