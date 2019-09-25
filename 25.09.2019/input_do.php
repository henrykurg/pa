<?php
//muutuja väärtuse võtmine vormist
$nimi = $_GET["nimi"];
$pikkus = $_GET["pikkus"];
$kaal = $_GET["kaal"];

echo "Nimi: ".$nimi."<br>";
echo "Pikkus:".$pikkus."<br>";
echo "Kaal:".$kaal ."<br>";
echo "<hr>";
echo '<a href= "input.php"> Sisesta andmed uuesti </a>';