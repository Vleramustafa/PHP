<?php    

// Including config.php file for connection with database
include_once('config.php');

// If the button Add Movie in cars.php is pressed, we will get data that users added into the form and insert them into the database:
if(isset($_POST['submit']))
{
    // Get data from the form
    $car_name = $_POST['car_name'];
    $car_km = $_POST['car_km'];
    $car_year = $_POST['car_year'];
    $car_rating = $_POST['car_rating'];
    $car_value = $_POST['car_value'];
    $car_image = $_POST['car_image'];

    // SQL query to insert the data into the cars table
    $sql = "INSERT INTO cars (car_name, car_km, car_year, car_rating, car_image, car_value) 
            VALUES (:car_name, :car_km, :car_year, :car_rating, :car_image, :car_value)";

    // Prepare the SQL statement
    $insertcars = $conn->prepare($sql);

    // Bind parameters to the prepared statement
    $insertcars->bindParam(':car_name', $car_name);
    $insertcars->bindParam(':car_km', $car_km);
    $insertcars->bindParam(':car_year', $car_year);
    $insertcars->bindParam(':car_rating', $car_rating);
    $insertcars->bindParam(':car_image', $car_image);
    $insertcars->bindParam(':car_value', $car_value);

    // Execute the query
    $insertcars->execute();

    // Redirect to cars.php after insertion
    header("Location: list_cars.php");
    exit(); // Always call exit after header to stop further script execution
}
?>