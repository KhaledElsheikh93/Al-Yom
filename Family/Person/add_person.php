<?php 

if(isset($_POST['add']))
{
    include "../database.php";
    
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $family_id = $_POST['family_id'];

    $insert_person = "INSERT INTO person (name, birthdate, family_id) VALUES ('$name', '$birthdate', '$family_id')";
    $conn->query($insert_person);

    header('location:../index.php');
}