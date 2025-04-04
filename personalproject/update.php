<?php
include_once('config.php');

if(isset($_POST['submit1'])){
    // Get the form data
    $id = $_POST['id'];
    $gymEquipment_name = $_POST['gymEquipment_name'];
    $gymEquipment_desc = $_POST['gymEquipment_desc'];
    $gymEquipment_rating = $_POST['gymEquipment_rating'];

    // Prepare the SQL UPDATE statement
    $sql = "UPDATE gymequipment SET gymEquipment_name = :gymEquipment_name, gymEquipment_desc = :gymEquipment_desc, gymEquipment_rating = :gymEquipment_rating WHERE id = :id";

    // Prepare the statement
    $prep = $conn->prepare($sql);

    // Bind the parameters to the query
    $prep->bindParam(':gymEquipment_name', $gymEquipment_name);
    $prep->bindParam(':gymEquipment_desc', $gymEquipment_desc);
    $prep->bindParam(':gymEquipment_rating', $gymEquipment_rating);
    $prep->bindParam(':id', $id);


    $prep->execute();
    header('Location:home.php');

}

?>