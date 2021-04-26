<?php
include '../Conectare/conectare.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $conn = connectToDatabase("db");
    $sql_insert = "delete from $_POST[tara] where ID = $id";
    $insert = mysqli_query($conn,$sql_insert);
    if(!$insert) {
        echo mysqli_error($conn);
        echo "Nu am sters obiectul in baza de date!";
    }
    else
    {
        header('Location: Administrare.php');
    }
}