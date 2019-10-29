<?php
$esimene = $_GET['number1'];
if (strlen($esimene) == 0 ) {
    echo 'Palun sisesta oma sünniaasta';
}
else if ( (2019 - $esimene) %  10 == 0 ) {
    echo 'Teil on juubeliaasta';
} else {
    echo 'Teil ei ole juubeliaasta';
}
echo '<hr><br>';
echo '<a href="juubel.php">Sisesta andmed uuesti</a>';
