<?php
$number1= $_GET['number1'];
$number2= $_GET['number2'];

//if data empty

if(strlen($number1)>0 and strlen($number2)>0){
    if ($number2==0){
        echo 'Nulliga ei saa jagada';
    }
    else{
        $result=$number1/$number2;
        echo $result;
    }
}
  else{
        echo 'Tuleb sisestada andmed<br>';
        echo '<a href="nulliga-jagamine.html">Sisesta uuesti</a>';
    }


