<?php
session_start();
if (!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true)
    header("Location: ../Conectare/login_cont.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Style/itemTest.css">
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
            include "../Sidebar.php";
            ?>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "db");
            $sql = "Select * from " . $_POST["baza"];
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="container c1">
                        <div class="container c11">
                            <h1>
                                <?php echo $row["Nume"]; ?>
                            </h1>
                            <p id="suma">
                                <?php
                                $data_curenta = date('Y-m-d', time());
                                if ($data_curenta < $row["Data_incheiere"]) {
                                ?>
                                    SUMA ACTUALA: <?php echo $row["Pret"]; ?>
                                <?php
                                }
                                else{
                                    ?>
                                    LICITATIE INCHEIATA!
                                    <?php
                                }
                                ?>
                            </p>
                            <a href="Item.php?tara=<?php echo $_POST["baza"]; ?>&ID=<?php echo $row["ID"]; ?>">
                                <img src="<?php echo $row["Link"]; ?>">
                            </a>
                        </div>
                    </div>
                    <?php
                }
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
