<?php
session_start();
if (!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true)
    header("Location: ../Conectare/login_cont.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["pret"]) == false) {

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Style/item.css">
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
            $conn = mysqli_connect("localhost", "root", "", "db");
            $sql = "Select * from $_GET[tara] where ID = $_GET[ID]";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="container c1">
                        <div class="container c11">
                            <h1>
                                <?php echo $row["Nume"]; ?>
                            </h1>
                            <p>

                                Origine: <?php echo $row["Origine"]; ?> <br>
                                Epoca: <?php echo $row["Dinastie"]; ?> <br>
                                Stare fizica: <?php echo $row["Stare"]; ?> <br>
                                Dimensiuni: <?php echo $row["Dimensiune"]; ?> <br>
                                Material: <?php echo $row["Material"]; ?> <br>
                                Descriere: <?php echo $row["Descriere"]; ?>

                            </p>
                            <p>
                                INCEPUT IN: <?php echo $row["Data_inceput"]; ?><br>
                                SFARSIT IN: <?php echo $row["Data_incheiere"]; ?>
                            </p>
                            <p id="suma">
                                <?php
                                $data_curenta = date('Y-m-d', time());
                                if ($data_curenta < $row["Data_incheiere"]) {
                                ?>
                                    SUMA ACTUALA: <?php echo $row["Pret"]; ?>
                                <form method="get" action="confirmare_pret.php">
                                    <input type="number" name="pret" min="<?php echo $row["Pret"]; ?>"><br>
                                    <input hidden type="checkbox" checked name="tara" value="<?php echo $_GET["tara"]; ?>">
                                    <input hidden type="checkbox" checked name="id" value="<?php echo $_GET["ID"]; ?>">
                                    <input type="submit" value="Liciteaza">
                                </form>
                                <?php
                                    if($row["Cumparator"] == $_SESSION["nume"])
                                    {?>
                                        <h1>Tu ai ultimul pret!</h1>
                                    <?php
                                    }
                                    if($row["Cumparator"] == "")
                                    { ?>
                                        <h1>Nimeni nu a licitat inca. Liciteaza chiar acum!</h1>
                                    <?php
                                    }
                                    ?>
                            <?php
                            }
                            else {
                                ?>
                                LICITATIE INCHEIATA!
                                <?php
                            }
                            ?>
                            </p>


                        </div>
                    </div>
                    <div class="container c2">
                        <div class="container c22">
                            <img src=" <?php echo $row["Link"]; ?> ">
                        </div>
                    </div>
                    <?php
                } ?>
                <?php
            } else {
                echo "No Results!";
            }
            $conn->close();

            ?>


        </div>
    </div>
</div>

</body>
</html>