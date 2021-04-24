<?php
function verif_login(&$nameErr,&$name,&$passwErr,&$passw) {
    $amVerificat=""; // OK daca s-a verificat complet
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nume"])) {
            $nameErr = "Nume este obligatoriu";
        } else {
            $name = test_input($_POST["nume"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z 1-9]*$/",$name)) {
                $nameErr = "Doar litere cifre si spatii permise";
            }
        }
        if (empty($_POST["psw"])) {
            $passwErr = "Parola este obligatorie";
        } else {
            $passw = test_input($_POST["psw"]);
        }

//}
        if (empty($nameErr)&&empty($passwErr))
            $amVerificat = "OK";
    }
    return $amVerificat;
}
?>
