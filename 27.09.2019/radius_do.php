<?php
//radius_do.php
//defineerime muutuja $raadius
//ja omistame kasutaja poolt sisestatud väärtus
$raadius = $_GET['raadius'];
//väljastame saadud väärtuse
echo 'Sisestatud raadius on '.$raadius.'<br>';
//arvutused
//ringi pindala
$ringiPindala = 3.14 * $raadius * $raadius;
//ringi ümbermõõt
$ringiUmbermoot = 3.14 * 2 * $raadius;
//muutujate andmete tüübi ja väärtuste kotroll
//var_dump($ringiPindala);
//var_dump($ringiUmbermoot);
echo 'Ringi pindala on '.$ringiPindala.'<br>';
echo 'Ringi ümbermõõt on '.$ringiUmbermoot.'<br>';
