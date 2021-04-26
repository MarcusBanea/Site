<?php
session_start();

?>

<html lang="ro">
<head>
    <title>Administrare</title>
    <link rel="stylesheet" href="../Style/Sterge_obiect.css">

</head>

<body>



<?php include "../Header/header.php" ?>

<div class="container">
    <div class="sterge">
        <h1>Sterge obiectul:</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            include '../Conectare/conectare.php';
            $conn = connectToDatabase("db");
            $sql = "Select * from $_POST[tara]";
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {?>
                <form method="post" action="Verificare_sterge.php">
                    <?php
                    while ($row = $result->fetch_assoc())
                    {?>
                        <label for="ob" ><p><?php echo $row["Nume"];?></p> <br></label>
                        <img src="<?php echo $row["Link"]; ?>"> <br>
                        <input type="radio" id="ob" name="id" value="<?php echo $row["ID"]; ?>">
                        <input type="checkbox" checked hidden id="ob" name="tara" value="<?php echo $_POST["tara"]; ?>">
                    <?php
                    }?>
                    <input type="submit" value="Sterge">
                </form><?php
            }
        }
        ?>
    </div>
</div>
</body>

</html>