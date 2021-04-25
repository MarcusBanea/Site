<head>
    <link rel="stylesheet" href="../Style/header.css">

</head>
<body>
<header>
    <div class="container-fluid">
        <div class="bara-navigatie">
            <div class="logo">
                <a href="../Index/index.php">
                    <img src="../Imagini/Logo.png" alt="Logo">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="../Index/index.php">ACASA</a></li>
                    <li><a href="../Item/itemTest.php">PRODUSE</a></li>
                    <li><a href="../Egypt/Egypt.php">DESPRE</a></li>
                    <?php
                        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
                        {?>

                            <?php
                            if($_SESSION["nume"] === "admin")
                            {?>
                               <li><a href="../Admin/Administrare.php">ADMINISTRARE</a></li> <?php
                            }
                            else
                            {?>
                                <li><a href=""><?php echo $_SESSION["nume"];?></a></li> <?php
                            }?>
                            <li><a href="../Conectare/logout.php">LOGOUT</a></li>
                        <?php
                        }
                        else
                            echo "<li><a href=../Conectare/login_cont.php>CONECTARE</a></li>";
                        ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
</body>