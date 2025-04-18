<?php

//Including config.php file for connection with database 
include_once('config.php');

//If the button Add Movie in movies.php is pressed, we will get datas that users added into the form, and insert them into database :
	if(isset($_POST['submit']))
	{

		$product_name = $_POST['product_name'];
		$product_quality = $_POST['product_quality'];
		$product_rating = $_POST['product_rating'];
		$product_image = $_POST['product_image'];
	

		$sql = "INSERT INTO products(product_name,product_quality,product_rating, product_image) VALUES (:product_name, :product_quality, :product_rating, :product_image)";

		$insertMovie = $conn->prepare($sql);
			

		$insertMovie->bindParam(':product_name', $product_name);
		
		$insertMovie->bindParam(':product_quality', $product_quality);
		$insertMovie->bindParam(':product_rating', $product_rating);
		$insertMovie->bindParam(':product_image', $product_image);

		$insertMovie->execute();

		header("Location: products.php");


	}



?>
