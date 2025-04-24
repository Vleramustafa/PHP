<?php 
/*
We will get the changed data from edit.php file and update them into the products table
*/
	include_once('config.php');
	

	if (isset($_POST['submit1'])) {
		$id = $_POST['id'];
		$product_name = $_POST['product_name'];
		$product_quality = $_POST['product_quality'];
		$product_rating = $_POST['product_rating'];
		$product_image = $_POST['product_image'];

		// Update the products table instead of movies table
		$sql = "UPDATE products SET id=:id, product_name=:product_name, product_quality=:product_quality, product_rating=:product_rating, product_image=:product_image WHERE id=:id";

		$prep = $conn->prepare($sql);
		$prep->bindParam(':id', $id);
		$prep->bindParam(':product_name', $product_name);
		$prep->bindParam(':product_quality', $product_quality);
		$prep->bindParam(':product_rating', $product_rating);
		$prep->bindParam(':product_image', $product_image);
		
		$prep->execute();
		header("Location: products.php");  // Redirect to product listing page
	}
?>
