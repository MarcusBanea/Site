<?php
session_start();
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true)
    header("Location: ../Conectare/login_cont.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Style/egypt.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Niconne"/>
    <title>Egypt</title>
</head>
<body>

<?php
include "../Header/header.php";
include "../Sidebar.php";
?>



<div class="container-fluid">
    <div class="img1">
        <div class="descriere-pagina">
            <div class="col">
                <div class="titlu">
                    <h1>Arta egipteana </h1>
                </div>
                <div class="text">
                    <p>
                        Arta egipteană antică cuprinde arta produsă în Egiptul Antic între secolul al XXXI-lea î.Hr. și
                        Secolul al IV-lea d.Hr..<br>
                        Cuprinde pictura, sculptura, desenele și caligrafia pe papiruși, faianța, bijuteriile,
                        fildeșurile, arhitectura, și alte forme de exprimare artistică.<br>
                        Este foarte conservatoare, stilul schimbându-se foarte puțin de-a lungul timpului.<br>
                        O mare parte a artei care a supraviețuit provine din morminte și monumente, oferind mai multe
                        informații despre credința egiptenilor în viața de apoi.<br>
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="img2">
        <div class="descriere-pagina">
            <div class="text">
                <p>
                    În limba egipteană nu exista un cuvânt pentru „artă”.<br>
                    Arta avea un scop funcțional, care era legat de religie și ideologie.<br>
                    Arta egipteană antică a înfățișat o viziune idealizată, nerealistă asupra lumii.
                    Nu exista o tradiție a expresiei artistice individuale, pentru că arta avea unui scop mai larg și
                    cosmic de menținere a ordinii.<br>
                </p>
            </div>
        </div>
    </div>

    <div class="img3">
        <div class="row">
            <div class="descriere-pagina">
                <div class="">
                    <div class="text">
                        Arta antică egipteană a exercitat o influență considerabilă asupra tuturor civilizațiilor cu
                        care a venit în contact.<br>
                        Artiștii greci îi datorează foarte mult, ca și cei romani, influențați de diversele opere și
                        obiecte de tezaur egiptene aduse la Roma.<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>



