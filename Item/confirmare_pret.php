<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$databbase = "db";

$conn = mysqli_connect($host, $user, $password, $databbase);
$p = $_GET["pret"];
$t = $_GET["tara"];
echo $p;
echo $t;
echo $_GET["id"];
echo "    ";

$sql = "select * from " . $t . " where ID = " . $_GET["id"];
$rez = $conn->query($sql);
if($rez->num_rows>0)
{
    while ($row = $rez->fetch_assoc())
    {
        echo $row["Pret"];
    }
}


$sql_insert = "UPDATE $t set Pret = '$p', Cumparator = '$_SESSION[nume]' where ID = '$_GET[id]'";
$insert = mysqli_query($conn,$sql_insert);
header("Location: $_SERVER[HTTP_REFERER]");

