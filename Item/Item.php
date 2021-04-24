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
                                INCEPUT IN: 27 Martie 2021 <br>
                                SFARSIT IN: 10 Aprilie 2021
                            </p>
                             <p id="suma">
                                SUMA ACTUALA: 155500$
                            </p>
                            <input type="number" min="50000" max="10000000"><br>

                        </div>
                    </div>
                    <div class="container c2">
                        <div class="container c22">
                            <img src=" <?php echo $row["Link"]; ?> ">
                        </div>
                    </div>
                    <?php
                }?>
            <?php
            }
            else {
                echo "No Results!";
            }
            $conn->close();

            ?>



        </div>
    </div>
</div>

</body>
</html>