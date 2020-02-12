<?php 

if(isset($_POST['add']))
{
    include "../database.php";
    
    $grandfather = $_POST['grandfather'];
    $father = $_POST['father'];
    $son = $_POST['son'];
    
    

    $insert_family = "INSERT INTO family_members (grandfather, father, son) VALUES ('$grandfather', ' $father', '$son')";
    $conn->query($insert_family);

    header('location:../index.php');
}