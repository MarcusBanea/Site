<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Style/china.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Niconne"/>
    <title>China</title>
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
                    <h1>Arta chineza </h1>
                </div>
                <div class="text">
                    <p>
                        Arta chineză este o artă vizuală care, fie că e veche sau modernă, își are originea sau este
                        practicată în China sau de către artiști chinezi.<br>
                        Arta chineză din Republica Chineză (sau Taiwan) și cea a chinezilor de peste mări poate să fie,
                        de asemenea, considerată ca fiind parte din arta chineză, bazându-se pe patrimoniul chinez și pe
                        cultura chineză.<br>
                        „Arta Epocii de piatră” timpurie datează din 10.000 î.Hr., constând în principal în ceramică
                        simplă și sculpturi.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="img2">
        <div class="descriere-pagina">
            <div class="col ch2">
                <div class="text">
                    <p>
                        Arta chineză are, fără îndoială, cea mai veche tradiție continuă din lume și este marcată de un
                        grad neobișnuit de continuitate, lipsit de un echivalent cu prăbușirea occidentală și
                        recuperarea treptată a stilurilor clasice.<br>
                        Mediile care au fost de obicei clasificate în Occident de la Renaștere ca arte decorative sunt
                        extrem de importante în arta chineză, iar o mare parte din cele mai bune opere au fost produse
                        în ateliere mari sau fabrici, de artiști în esență necunoscuți, în special în ceramica
                        chineză.<br>
                    </p>
                </div>
                <div class="imag jurju">
                    <div class="row">
                        <img src="../Imagini/China/China_antique1.jpg" alt="antique1">
                        <img src="../Imagini/China/China_antique2.jpg" alt="antique2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="img3">
        <div class="row">
            <div class="descriere-pagina">
                <div class="">
                    <div class="text">
                        <p>O mare parte din cele mai bune opere în ceramică, textile, lemn lăcuit sculptat și alte
                            tehnici au fost produse de-a lungul unei perioade lungi de timp de diferitele fabrici sau
                            ateliere imperiale, care, pe lângă faptul că au fost folosite la curte, au fost distribuite
                            în interiorul Chinei și în străinătate la o scară imensă, demonstrând bogăția și puterea
                            Împăraților.</p>
                        <p>În contrast, tradiția laviului, practicată în principal de pictori de curte, în special a
                            peisajelor, florilor și păsărilor, a dezvoltat valori estetice în funcție de imaginația
                            individuală și de observarea obiectivă a fiecărui artist, care sunt similare cu cele
                            occidentale.</p>
                        <p>După ce contactele cu arta occidentală au devenit din ce în ce mai importante din secolul al
                            XIX-lea încoace, în ultimele decenii China a participat cu un succes din ce în ce mai mare
                            la arta contemporană la nivel mondial.</p>
                    </div>
                </div>
            </div>
            <div class="slideshow">
                <div class="slider">
                    <div class="slides">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">

                        <div class="slide first">
                            <img src="../Imagini/China/warrior-glaze-porcelain-vase.jpg" alt="poza2">
                        </div>
                        <div class="slide">
                            <img src="../Imagini/China/antique-blue-white-dragon.jpeg" alt="poza1">
                        </div>
                        <div class="slide">
                            <img src="../Imagini/China/lidded-floor-vase-porcelain.jpg" alt="poza3">
                        </div>
                        <div class="slide">
                            <img src="../Imagini/China/dragon-kangxi-dynasty.jpg" alt="poza4">
                        </div>

                        <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                        </div>
                    </div>
                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>