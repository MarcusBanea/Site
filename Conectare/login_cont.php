<?php
session_start();
?>

<html lang="ro">
<head>
    <title>Conectare</title>
    <link rel="stylesheet" href="../Style/connect.css">

</head>

<body>

<?php
include '../Conectare/conectare.php';
$eroareNume = $eroareVerificare = $mesajEroare = "";
$nume = "";
$psw = $eroarePsw = "";

include 'verificare_login.php';
$eroareVerificare=verif_login($eroareNume,$nume,$eroarePsw,$psw); // verificare date intrare
//echo $eroareVerificare;
if ($eroareVerificare == "OK")
{ // verificare existenta in baza de date
    $conn = connectToDatabase("proiect");
    // curata variabile de atacuri sql injectio si XSS (cross site sripting)
    $name=curata($nume);
    $passw=curata($psw);
    $psw = md5($psw);
    $sql = "SELECT * FROM users where nume='$name' and password='$psw'";
    $rez = mysqli_query($conn,$sql);
    $foundErr = "";
    if (mysqli_num_rows($rez)== 0) {
        $foundErr = "Nume sau parola gresita!";
        //echo $foundErr;
        header('Location: login_cont.php');
    }
    if (mysqli_num_rows($rez) == 1)
    {
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["nume"] = $nume;
        header('Location: ../Index/index.php');

    }
}
?>


<?php include "../Header/header.php" ?>
<div class="container">

    <div class="log">
        <form class="log1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>Nume: <br>
                <input type="text" name="nume" value="<?php echo $nume; ?>">
            </label> <br>
            <p><?php echo $eroareNume; ?></p> <br>
            <label>Parola:<br>
                <input type="password" name="psw" value="<?php echo $psw; ?>">
            </label> <br>
            <p><?php echo $eroarePsw; ?></p> <br>
            <input type="submit">
            <p>
                <?php
                    if(empty($foundErr) == false)
                        echo $foundErr;
                ?>
            </p>
        </form>
        <h1>Nu ai cont? <a href="creare_cont.php">Inregistreaza-te acum:</a></h1>
    </div>
</div>


</body>

</html>