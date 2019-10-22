<?php

//define function

function isPrimenumber ($number) {
    if ($number < 2) {
        echo $number.' - antud arv ei kuulu valitud vahemiku sisse <br>';
    } else {
        $divider = 2; // define divider
        while ($number % $divider != 0) {
            // while number is not divided by divider with modulo 0
            $divider++; // get the next divider value
        }
        // if number and divider is equal - prime number
        if ($number == $divider) {
            $result= true;
        } else {
            // otherwise
            $result=false;
        }
    }
    return $result;
}

function isPRimenumberDescription($number, $isPrime) {
    if($isPrime) {
        echo $number. ' on algarv';
    }
    else{
        echo $number. ' ei ole algarv';
    }
}

isPRimenumberDescription( 2, isPrimenumber(2));