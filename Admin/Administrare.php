<?php
session_start();

?>

<html lang="ro">
<head>
    <title>Administrare</title>
    <link rel="stylesheet" href="../Style/Administrare.css">

</head>

<body>

<?php include "../Header/header.php" ?>

<div class="container">
    <div class="optiuni">
        <h1>Ce doresti sa faci?</h1>
        <ul>
            <li><a href="Adauga.php">Adauga un obiect nou</a></li>
            <li><a href="">Sterge un obiect</a></li>
            <li><a href="">Modifica datele unui obiect</a></li>
            <li><a href="">Trimite un mesaj</a></li>
        </ul>
    </div>
</div>
</body>

</html>
