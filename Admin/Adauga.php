<?php
session_start();

?>

<html lang="ro">
<head>
    <title>Administrare</title>
    <link rel="stylesheet" href="../Style/Adauga.css">

</head>

<body>



<?php include "../Header/header.php" ?>

<div class="container">
    <div class="adauga">
        <form method="post" action="Verificare_adauga.php">
            <label>Tara:
                <select name="tara">
                    <option value="china">China</option>
                    <option value="egypt">Egypt</option>
                    <option value="india">India</option>
                </select>
            </label>
            <label>Nume obiect:
                <input class="nmOb" type="text" name="nmOb">
            </label> <br>
            <label>Dinastie:
                <input class="dinOb" type="text" name="dinOb">
            </label> <br>
            <label>Material:
                <input class="mtOb" type="text" name="mtOb">
            </label> <br>
            <label>Stare:
                <input class="stOb" type="number" name="stOb">
            </label> <br>
            <label>Origine:
                <input class="ogOb" type="text" name="ogOb">
            </label> <br>
            <label>Dimensiune:
                <input class="dimOb" type="text" name="dimOb">
            </label> <br>
            <label>Descriere:
                <input class="dscOb" type="text" name="dscOb">
            </label> <br>
            <label>Link:
                <input class="lnkOb" type="url" name="lnkOb">
            </label> <br>
            <label>
                <input type="submit" value="Adauga">
            </label>
        </form>
    </div>

</div>
</body>

</html>