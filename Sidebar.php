<head>
    <link rel="stylesheet" href="../sidebar.css">

</head>
<div id="lista">
    <h1>
        CATEGORII:
    </h1>
    <form action="itemTest.php" method="post">
        <input name="baza" value="China" type="submit"><br>
        <input name="baza" value="Egypt" type="submit"><br>
        <input name="baza" value="Maya" type="submit"><br>
        <input name="baza" value="India" type="submit"><br>
        <?php
            if($_SESSION["nume"] === "admin") {
                ?>
                <input name = "baza" value = "China incheiat" type = "submit" ><br>
                <input name = "baza" value = "Egypt incheiat" type = "submit" ><br>
                <input name = "baza" value = "Maya incheiat" type = "submit" ><br>
                <input name = "baza" value = "India incheiat" type = "submit" ><br>
                <?php
            }
        ?>
    </form>
</div>
<script type="text/javascript">
    window.onscroll = function () {
        myFunction()
    };

    var header = document.getElementById("lista");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>