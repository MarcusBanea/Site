<?php
session_start();
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true)
    header("Location: ../Conectare/login_cont.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Style/india.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Niconne"/>
</head>
<body>

<?php
include "../Header/header.php";
include "../Sidebar.php";
?>

<div class="container-fluid">
    <div id="img1">
        <div class="descriere-pagina">
            <div class="col">
                <div class="titlu">
                    <h1>Arta indiana </h1>
                </div>
                <div class="text">
                    <p>
                        Arta indiană constă dintr-o varietate de forme de artă, inclusiv pictură, sculptură, ceramică și
                        Arte textile, cum ar fi mătasea țesută.
                        Din punct de vedere geografic, se întinde pe întregul subcontinent Indian, inclusiv ceea ce este
                        acum India, Pakistan, Bangladesh, Sri Lanka, Nepal, Bhutan și estul Afganistanului.
                        Un puternic simț al designului este caracteristic artei indiene și poate fi observat în formele
                        sale moderne și tradiționale.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div id="img2">
        <div class="descriere-pagina">
            <div class="text">
                <p>
                    Originea artei indiene poate fi urmărită în așezările preistorice din mileniul 3 î.hr.<br>
                    Pe drumul spre timpurile moderne, arta indiană a avut influențe culturale, precum și influențe
                    religioase, cum ar fi hinduismul, budismul, jainismul, sikhismul și Islamul.<br>
                    În ciuda acestui amestec complex de tradiții religioase, în general, stilul artistic predominant în
                    orice moment și loc a fost împărtășit de marile grupuri religioase.<br>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div id="img3">
        <div class="row">
            <div class="descriere-pagina">
                <div class="">
                    <div class="text">
                        În arta istorică, sculptura în piatră și metal, în principal religioasă, a supraviețuit
                        climatului Indian mai bine decât alte medii și oferă cele mai multe dintre cele mai bune
                        rămășițe.<br>
                        Multe dintre cele mai importante descoperiri antice care nu sunt în piatră sculptată provin din
                        regiunile înconjurătoare, mai uscate, decât din India însăși.<br>
                        Tradițiile funerare și filozofice indiene exclud bunurile grave, care este principala sursă de
                        Artă antică în alte culturi.<br>
                        Stilurile artistului Indian au urmat istoric religiile indiene din subcontinent, având o
                        influență deosebit de mare în Tibet, Asia de Sud-Est și China.<br>
                        Arta indiană a primit ea însăși influențe uneori, în special din Asia Centrală și Iran și
                        Europa.<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



