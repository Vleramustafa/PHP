<?php	

//Including config.php file for connection with database 
	include_once('config.php');

//If the button Add Movie in movies.php is pressed, we will get datas that users added into the form, and insert them into database :
	if(isset($_POST['submit']))
	{

		$car_name = $_POST['car_name'];
		$car_km = $_POST['car_km'];
		$car_year = $_POST['car_year'];
		$car_rating = $_POST['car_rating'];
		$car_value = $_POST['car_value'];
        $car_image = $_POST['car_image'];
	

		$sql = "INSERT INTO movies(car_name, car_km, car_year, car_rating, car_image,car_value) VALUES (:movie_name, :movie_desc, :movie_quality, :movie_rating, :movie_image)";

		$insertcar= $conn->prepare($sql);
			

		$insertcar->bindParam(':car_name', $car_name);
		$insertcar->bindParam(':car_km', $car_km);
		$insertcar->bindParam(':car_year', $car_year);
		$insertcar->bindParam(':car_rating', $car_rating);
		$insertcar->bindParam(':car_value', $car_value);
        $insertcar->bindParam(':car_value', $car_value);

		$insertcar->execute();

		header("Location: cars.php");


	}




?>