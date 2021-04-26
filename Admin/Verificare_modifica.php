<?php
include '../Conectare/conectare.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tara = $_POST["tara"];
    $id = $_POST["id"];
    $nm = $_POST["nm"];
    $dn = $_POST["ep"];
    $mt = $_POST["mt"];
    $sf = $_POST["sf"];
    $og = $_POST["og"];
    $dm = $_POST["dm"];
    $ds = $_POST["ds"];
    $from = $_POST["ii"];
    $to = $_POST["si"];
    $conn = connectToDatabase("db");
    //sql_insert = "insert into $tara
    //(ID, Nume, Dinastie, Material, Stare, Origine, Dimensiune, Descriere, Data_inceput, Data_incheiere)
    //values ('$id','$nm','$dn','$mt','$sf','$og','$dm','$ds','$from','$to')";
    $sql_insert = "update $tara set 
                    Nume = '$nm',
                    Dinastie = '$dn', 
                    Material = '$mt',
                    Stare = '$sf',
                    Origine = '$og',
                    Dimensiune = '$dm',
                    Descriere = '$ds',
                    Data_inceput = '$from',
                    Data_incheiere = '$to'
                    where ID = $id;
                    ";
    $insert = mysqli_query($conn,$sql_insert);
    if(!$insert) {
        echo mysqli_error($conn);
        echo "Nu am modificat obiectul in baza de date!";
    }
    else
    {
        header('Location: Administrare.php');
    }
}