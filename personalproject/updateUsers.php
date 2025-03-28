<?php
    include_once('config.php');

    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $usurname=$_POST['surname'];
        $email=$_POST['email'];
        
        $sql="UPDATE users SET id=:id,name=:name, surname=:surname,email=:email WHERE id=:id";

        $prep=$conn->prepare($sql);

        $prep->bindParam(':id',$id);
        $prep->bindParam(':name',$name);
        $prep->bindParam(':surname',$surname);
        $prep->bindParam(':email',$email);
        $prep->execute();
        
        header('Location:dashboard.php');
    }
?>