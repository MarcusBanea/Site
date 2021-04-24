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
echo $eroareVerificare;
if ($eroareVerificare == "OK")
{ // verificare existenta in baza de date
    $conn = connectToDatabase();
    // curata variabile de atacuri sql injectio si XSS (cross site sripting)
    $name=curata($nume);
    $passw=curata($psw);
    $psw = md5($psw);
    $sql = "SELECT * FROM users where nume='$name' and password='$psw'";
    $rez = mysqli_query($conn,$sql);
    $foundErr = "";
    if (mysqli_num_rows($rez)== 0) {
        $foundErr = "utilizator NEGASIT,  Nume sau parola ERONAT";
        echo $foundErr;
    }
    if (mysqli_num_rows($rez) == 1)
    {
        $foundErr = "Am gasit";
        echo $foundErr;
        $row= mysqli_fetch_assoc($rez);
        $id_util = $row['id_util'];
        header('Location: utilizator.php?utilizator='.$name.'&id_util='.$id_util.'&rezultate=nu' );
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
        </form>
        <h1>Nu ai cont? <a href="creare_cont.php">Inregistreaza-te acum:</a></h1>
    </div>
</div>
<?php
//echo '<h3 class="error">' . $foundErr . "</h3>";
?>

</body>

</html>