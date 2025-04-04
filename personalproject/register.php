<?php
	include_once('config.php');

	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];

		$tempPass = $_POST['password'];
		$password = password_hash($tempPass, PASSWORD_DEFAULT);

		$tempConfirm = $_POST['confirm_password'];

		// Check if all required fields are filled and if passwords match
		if (empty($name) || empty($username) || empty($email) || empty($password) || empty($tempConfirm)) {
			echo "You have not filled in all the fields.";
		} elseif ($tempPass !== $tempConfirm) {
			echo "Passwords do not match.";
		} else {
			$sql = "INSERT INTO users(name, username, email, password) VALUES (:name, :username, :email, :password)";
			
			$insertSql = $conn->prepare($sql);

			$insertSql->bindParam(':name', $name);
			$insertSql->bindParam(':username', $username);
			$insertSql->bindParam(':email', $email);
			$insertSql->bindParam(':password', $password);

			

			header("Location: login.php");
			exit(); 
		}
	}
?>

