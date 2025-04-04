<?php

include_once('config.php');

if(isset($_POST['submit'])){

    $gymEquipment_name=$_POST['gymEquipment_name'];
    $gymEquipment_desc=$_POST['gymEquipment_desc'];
    $gymEquipment_rating=$_POST['gymEquipment_rating'];
    $gymEquipment_image=$_POST['gymEquipment_image'];

    $sql="INSERT INTO gym (gymEquipment_name,gymEquipment_desc,gymEquipment_quality,gymEquipment_rating,gymEquipment_image) VALUES (:gymEquipment_name,gymEquipment_desc,gymEquipment_quality,gymEquipment_rating,gymEquipment_image)";

    $insertgymEquipment=$conn->prepare($sql);

    $insertgymEquipment->bindParam(':gymEquipment_name',$gymEquipment_name);
    $insertgymEquipment->bindParam(':gymEquipment_desc',$gymEquipment_desc);
    $insertgymEquipment->bindParam(':gymEquipment_image',$gymEquipment_image);
    $insertgymEquipment->bindParam(':gymEquipment_rating',$gymEquipment_rating);

    $insertgymEquipment->execute();

    header('Location:movies.php');
}