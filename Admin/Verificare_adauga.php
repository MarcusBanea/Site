<?php
include '../Conectare/conectare.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tara = $_POST["tara"];
    $nmOb = $_POST["nmOb"];
    $dnOb = $_POST["dinOb"];
    $mtOb = $_POST["mtOb"];
    $stOb = $_POST["stOb"];
    $ogOb = $_POST["ogOb"];
    $dimOb = $_POST["dimOb"];
    $dscOb = $_POST["dscOb"];
    $lnkOb = $_POST["lnkOb"];
    $pret = 0;
    $cmp = " ";
    $from = date('Y-m-d', time());
    $to = date('Y-m-d', strtotime("2021-09-30"));
    $conn = connectToDatabase("db");
    $sql_insert = "insert into $tara 
    (ID, Nume, Dinastie, Material, Stare, Origine, Dimensiune, Descriere, Link, Pret, Cumparator, Data_inceput, Data_incheiere)
    values (NULL,'$nmOb','$dnOb','$mtOb','$stOb','$ogOb','$dimOb','$dscOb','$lnkOb','$pret','$cmp','$from','$to')";
    $insert = mysqli_query($conn,$sql_insert);
    if(!$insert) {
        echo mysqli_error($conn);
        echo "Nu am adaugat obiectul in baza de date!";
    }
    else
    {
        header('Location: Administrare.php');
    }
}