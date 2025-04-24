<?php

//Including config.php file for connection with database 
include_once('config.php');

//If the button Add Movie in movies.php is pressed, we will get datas that users added into the form, and insert them into database :
	if (isset($_POST['submit'])) {
		$product_name = $_POST['product_name'];
		$product_quality = $_POST['product_quality'];
		$product_rating = $_POST['product_rating'];
	
		// Handle the uploaded image
		if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === 0) {
			$image_name = $_FILES['product_image']['name'];
			$image_tmp = $_FILES['product_image']['tmp_name'];
			
			// Optional: generate a unique name to avoid conflicts
			$image_path = 'uploads/' . uniqid() . '_' . $image_name;
	
			// Move image to a permanent location
			move_uploaded_file($image_tmp, $image_path);
		} else {
			$image_path = null;
		}
	
		$sql = "INSERT INTO products(product_name, product_quality, product_rating, product_image)
				VALUES (:product_name, :product_quality, :product_rating, :product_image)";
	
		$insertProduct = $conn->prepare($sql);
	
		$insertProduct->bindParam(':product_name', $product_name);
		$insertProduct->bindParam(':product_quality', $product_quality);
		$insertProduct->bindParam(':product_rating', $product_rating);
		$insertProduct->bindParam(':product_image', $image_path);
	
		$insertProduct->execute();
	
		header("Location: products.php");
		exit();
	}
	


?>
