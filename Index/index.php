<?php
session_start();
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true)
    header("Location: ../Conectare/login_cont.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Style/index.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Niconne"/>
    <title>Licitatii</title>
</head>


<body>

<?php
include "../Header/header.php";
?>

<div id="test1">
    <div class="container-fluid">
        <div class="corp">
            <div class="container">
                <div class="row">
                    <h1 id="titlu">Licitatii</h1>
                </div>
                <div class="row">
                    <p id="descriere">
                        Site de lictiatii pentru obiecte cu valoare istorica si antichitati. <br>
                        Obiecte de la alti pasionati din domeniu, obiecte ce ne povestesc istoria noastra, a oamenilor.
                    </p>
                </div>
                <div class="row">
                    <button type="button">Exploreaza</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="../Egypt/Egypt.php">
                        <div class="card Egypt">
                            <h5>Egypt</h5>
                            <p>
                                Egiptul antic a fost o veche civilizație din nord-estul Africii, care s-a dezvoltat în
                                <br>zonele joase de-a lungul fluviului Nil,
                                <br>Civilizația egipteană s-a format în jurul anilor 3150 î.Hr
                            </p>
                        </div>
                    </a>
                    <a href="../China/China.php">
                        <div class="card China">
                            <h5>China</h5>
                            <p>
                                Civilizația chineză a apărut în mileniul al III-lea î.Hr. pe văile fluviilor Huanghe și
                                <br>Yangtze. În secolul al III-lea î.Hr. s-au unificat principatele existente într-un singur imperiu.
                            </p>
                        </div>
                    </a>
                    <a href="../India/India.php">
                        <div class="card India">
                            <h5>India</h5>
                            <p>
                                Civilizația de pe Valea Indului, cunoscută și ca Civilizația Harappa sau Civilizația harappă)
                                este cea mai veche civilizație antică de pe teritoriul subcontinentului indian.
                            </p>
                        </div>
                    </a>
                    <a href="../Maya/Maya.php">
                        <div class="card Maya">
                            <h5>Maya</h5>
                            <p>
                                Civilizația mayașă este o civilizație mesoamericană
                                <br>cunoscută atât pentru scrierea sa logosilabică cât și pentru arta, arhitectura,
                                matematica, calendarul și sistemul său astonomic.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>