<?php 
/*
We will get the changed data from edit.php file and update them into database
*/
	include_once('config.php');
	


	if (isset($_POST['submit1'])) {
		$id = $_POST['id'];
		$car_name = $_POST['car_name'];
    $car_km = $_POST['car_km'];
    $car_year = $_POST['car_year'];
    $car_rating = $_POST['car_rating'];
    $car_value = $_POST['car_value'];
    $car_image = $_POST['car_image'];
		

    $sql = "UPDATE cars SET id=:id,  car_name=:car_name, car_km=:car_km, car_year=:car_year,car_value=:car_value, car_image:car_image,car_value:car_value WHERE id=:id";
$insertcars = $conn->prepare($sql);

		$prep->bindParam(':car_name', $car_name);
    $prep->bindParam(':car_km', $car_km);
    $prep->bindParam(':car_year', $car_year);
    $prep->bindParam(':car_rating', $car_rating);
    $prep->bindParam(':car_image', $car_image);
    $prep->bindParam(':car_value', $car_value);
		
		$prep->execute();
		header("Location: list_cars.php");
	}
 ?>