<?php
//radius_do.php
//defineerime muutuja $raadius
//ja omistame kasutaja poolt sisestatud väärtus
$raadius = $_GET['raadius'];
//väljastame saadud väärtuse
echo 'Sisestatud raadius on '.$raadius.'<br>';
//arvutused
//ringi pindala
$ringiPindala = pi() * $raadius * $raadius;
//ringi ümbermõõt
$ringiUmbermoot = pi() * 2 * $raadius;
//muutujate andmete tüübi ja väärtuste kotroll
//var_dump($ringiPindala);
//var_dump($ringiUmbermoot);
echo 'Ringi pindala on '.round($ringiPindala, 3).'<br>';
echo 'Ringi ümbermõõt on '.round($ringiUmbermoot, 3).'<br>';
