<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Style/Modifica_obiect.css">
    <title>Titlu item</title>
</head>
<body>

<?php
include "../Header/header.php";
?>

<div id="test1">
    <div class="container-fluid">
        <div class="row">

            <?php
            include '../Conectare/conectare.php';
            $conn = connectToDatabase('db');
            $sql = "Select * from $_POST[tara] where ID = $_POST[id]";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="container c1">
                        <div class="container c11">
                            <form method="post" action="Verificare_modifica.php">

                                <label for="nm"><p>NUME OBIECT</p></label> <br>
                                <input id="nm" type="text" name="nm" value="<?php echo $row["Nume"]; ?>"> <br>

                                <label for="og">ORIGINE</label> <br>
                                <input id="og" type="text" name="og" value="<?php echo $row["Origine"]; ?>"><br>

                                <label for="ep">EPOCA</label> <br>
                                <input id="ep" type="text" name="ep" value=" <?php echo $row["Dinastie"]; ?> "><br>

                                <label for="sf">STARE FIZICA</label> <br>
                                <input id="sf" type="number" name="sf" value="<?php echo $row["Stare"]; ?>"><br>

                                <label for="dm">DIMENSIUNI</label> <br>
                                <input id="dm" type="text" name="dm" value="<?php echo $row["Dimensiune"]; ?>"><br>

                                <label for="mt">MATERIAL</label> <br>
                                <input id="mt" type="text" name="mt" value="<?php echo $row["Material"]; ?>"><br>

                                <label for="ds">DESCRIERE</label> <br>
                                <input id="ds" type="text" name="ds" value="<?php echo $row["Descriere"]; ?>"><br>

                                <label for="ii">INCEPUT IN</label> <br>
                                <input id="ii" type="date" name="ii" value="<?php echo $row["Data_inceput"]; ?>"><br>

                                <label for="si">SFARSIT IN</label> <br>
                                <input id="si" type="date" name="si" value="<?php echo $row["Data_incheiere"]; ?>"><br>

                                <input type="checkbox" checked hidden name="tara" value="<?php echo $_POST["tara"]; ?>">
                                <input type="checkbox" checked hidden name="id" value="<?php echo $_POST["id"]; ?>"><br>
                                <input type="submit" value="Modifica">

                            </form>
                        </div>
                    </div>
                    <div class="container c2">
                        <div class="container c22">
                            <img src=" <?php echo $row["Link"]; ?> ">
                        </div>
                    </div>
                <?php }
                }?>
        </div>
    </div>
</div>


</body>
</html>