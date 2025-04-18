<?php
session_start();
include_once('config.php');

if(isset($_POST['submit'])){
    // Debugging
    //var_dump($_POST);  // Check what data is being sent

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        echo "Please fill out all the fields";
    } else {
        $sql = "SELECT id, name, username, password, email FROM users WHERE username=:username";
        $selectUser = $conn->prepare($sql);
        $selectUser->bindParam(":username", $username);
        $selectUser->execute();
        $data = $selectUser->fetch();

       // if($data == false){
        //     echo "The user does not exist";
        // } else {
        //     if(password_verify($password, $data['password'])){
        //         $_SESSION['id'] = $data['id'];
        //         $_SESSION['username'] = $data['username'];
        //         $_SESSION['name'] = $data['name'];
        //         $_SESSION['email'] = $data['email'];  // Ensure 'email' column exists in DB

                // Redirect to dashboard
                header('Location: dashboard.php');
                exit();  // Ensure script stops executing after redirect
            // } else {
            //     echo "The password is not valid";
            // }
        }
    }
//}
?>
