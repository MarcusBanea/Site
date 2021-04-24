<html lang="ro">
<head>
    <title>Conectare</title>
    <link rel="stylesheet" href="../Style/connect.css">

</head>

<body>

<?php
include '../Conectare/conectare.php';

$eroareNume = $eroareEmail = $eroareVerificare = $mesajEroare = "";
$nume = $email = "";
$psw = $eroarePsw = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["nume"])) {
        $eroareNume = "Numele este obligatoriu";
    } else {
        $nume = test_input($_POST["nume"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z 1-9]*$/",$nume)) {
            $eroareNume = "Doar litere cifre si spatii sunt permise";
        }
    }
    if (empty($_POST["psw"])) {
        $eroarePsw = "Parola este obligatorie";
    } else {
        $psw = test_input($_POST["psw"]);
        if (strlen($psw) < 4)
        {$eroarePsw = "parola MAI MICA de 4 caratere";}
        elseif (!preg_match("/^[a-zA-Z1-9]*$/",$psw)) {
            // check if name only contains letters and whitespace
            $eroarePsw = "Doar litere si cifre sunt permise";
        }
    }
    if (empty($_POST["email"])) {
        $eroareEmail = "E-mail este obligatoriu";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $eroareEmail = "Format email Invalid";
        }
    }
    if (!(empty($nume) || empty($psw) || empty($email)) && (empty($eroareNume) && empty($eroareEmail) && empty($eroarePsw)))
        $eroareVerificare="OK";

}

if ($eroareVerificare=="OK")
{ // verificare existenta in baza de date
    $conn = connectToDatabase();
    // curata variabile de atacuri sql injectio si XSS (cross site sripting)
    $nume=curata($nume);
    $email=curata($email);
    $psw=curata($psw);
    $sql = "SELECT * FROM users where nume ='$nume' and email = '$email'";
    $rez = mysqli_query($conn,$sql);
    if (mysqli_num_rows($rez) == 0) {
        echo "Nu exista acest user!";
        echo $nume;
        $psw = md5($psw);
        $sql_insert = "INSERT INTO users (nume, email, password) values ('$nume','$email','$psw')";
        //$sql_insert = "INSERT INTO `utilizatori`(nume,e_mail,parola) VALUES ('$name','$email','$passw')";
        $insert = mysqli_query($conn,$sql_insert);
        if(!$insert)
            echo "Nu am adaugat utilizatorul in baza de date!";
    }
    if (mysqli_num_rows($rez) >= 1)
        $mesajEroare = "Exista un utilizator cu acest nume si e-mail DEJA CREAT";
}

?>


<?php include "../Header/header.php" ?>
<div class="container">
    <div class="log">
        <form class="log1" method="post">
            <label>Email: <br>
                <input type="email" name="email" required>
            </label> <br>
            <label>Parola:<br>
                <input type="password" name="psw" required>
            </label> <br>
            <input type="submit">
        </form>
    </div>
    <div class="reg">
        <h1>Nu ai cont? Inregistreaza-te acum:</h1>
        <form class="reg1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label>Nume:<br>
                <input type="text" name="nume" value="<?php echo $nume; ?>">
            </label> <br>
            <p><?php echo $eroareNume; ?></p> <br>
            <label>Email:<br>
                <input type="email" name="email" value="<?php echo $email; ?>">
            </label> <br>
            <p><?php echo $eroareEmail; ?></p> <br>
            <label>Parola:<br>
                <input type="password" name="psw" value="<?php echo $psw; ?>">
            </label> <br>
            <p><?php echo $eroarePsw; ?></p> <br>
            <input type="submit">
        </form>
    </div>
</div>

<?php
echo '<h3 class="error">'.$eroareVerificare."</h3>";
//if (!(empty($name) || empty($email)) && (empty($nameErr)&&empty($emailErr)&&empty($existErr)))
if (empty($nameErr)&&empty($emailErr)&&empty($existErr))
{ //toate condittile sunt indeplinite //
    //echo '<h3 style="text-align:right color:red" >Acum aveti cont! Logativa ca si Utilizator</h3>';
    // header("Location: login_user.php"); // nu se folosete pt. a putea afisa rezutatul crearii de cont
}
?>



</body>

</html>