<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_car'])) {
    $name = $_POST['name'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $km = $_POST['km'];
    $price = $_POST['price'];
    $imported_from = $_POST['imported_from'];

    $sql = "INSERT INTO cars (name, year, color, km, price, imported_from) VALUES ('$name', '$year', '$color', '$km', '$price', '$imported_from')";
    if ($conn->query($sql) === TRUE) {
        echo "Car added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>