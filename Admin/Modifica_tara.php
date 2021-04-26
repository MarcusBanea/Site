<?php
session_start();

?>

<html lang="ro">
<head>
    <title>Administrare</title>
    <link rel="stylesheet" href="../Style/Sterge_tara.css">

</head>

<body>



<?php include "../Header/header.php" ?>

<div class="container">
    <div class="sterge">
        <h1>Categorie:</h1>
        <form method="post" action="Modifica_alege_obiect.php">
            <label>China
                <input type="radio" name="tara" value="china">
            </label>
            <label>Egypt
                <input type="radio" name="tara" value="egypt">
            </label>
            <label>India
                <input type="radio" name="tara" value="india">
            </label>
            <input type="submit" value="Alege">
        </form>
    </div>
</div>
</body>

</html>