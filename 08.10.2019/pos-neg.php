<?php
//def muutuja

$number=0;

//if stat
//control
var_dump($number>0);
echo '<br>';
if ($number>0) {
    //work if number > 0
    echo $number.' on positiivne <br>';
}
else if ($number<0) {
    echo $number.' on negatiivne';
}
else{
    echo $number.' on null <br>';
}
echo 'Programmi lõpp';