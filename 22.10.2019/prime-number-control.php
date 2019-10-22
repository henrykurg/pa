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
            echo $number . ' on algarv<br>';
        } else {
            // otherwise
            echo $number . ' ei ole algarv<br>';
        }
    }
}

isPrimenumber(rand(0,1000));
