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
            if (isset($_POST["baza"])) {
                $conn = mysqli_connect("localhost", "root", "", "db");
                $s = preg_split("[\s]", $_POST["baza"]);
                $sql = "Select * from " . $s[0];
                $result = $conn->query($sql);
                if (count($s) == 1) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $data_curenta = date('Y-m-d', time());
                            if ($data_curenta < $row["Data_incheiere"]) {
                                ?>
                                <div class="container c1">
                                    <div class="container c11">
                                        <h1>
                                            <?php echo $row["Nume"]; ?>
                                        </h1>
                                        <p id="suma">
                                            SUMA ACTUALA: <?php echo $row["Pret"]; ?>
                                        </p>
                                        <a href="Item.php?tara=<?php echo $_POST["baza"]; ?>&ID=<?php echo $row["ID"]; ?>">
                                            <img src="<?php echo $row["Link"]; ?>">
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    } else {
                        echo "No Results!";
                    }
                    $conn->close();
                } else {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            //$data_curenta = date('Y-m-d', time());
                            $data_curenta = date('Y-m-d', time());
                            if ($data_curenta >= $row["Data_incheiere"]) {
                                ?>
                                <div class="container c1">
                                    <div class="container c11">
                                        <h1>
                                            <?php echo $row["Nume"]; ?>
                                        </h1>
                                        <p id="suma">
                                            LICITATIE INCHEIATA!
                                        </p>
                                        <a href="Item.php?tara=<?php echo $_POST["baza"]; ?>&ID=<?php echo $row["ID"]; ?>">
                                            <img src="<?php echo $row["Link"]; ?>">
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    } else {
                        echo "No Results!";
                    }
                    $conn->close();
                }
            } else {
                echo "<h1 id='aleg_categ'>&larr; ALEGE O CATEGORIE DE PRODUSE</h1>";
            }
            ?>
        </div>
    </div>
</div>


</body>
</html>
