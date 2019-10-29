<?php

$number= $_POST['number_entered'];
$submitbutton= $_POST['submit'];
$randomnumber= mt_rand(1,10);
?>

<form action="" method="POST">
    Arva ära nr 1 ja 10 vahel
    <input type="text" name="number_entered" value=''/> <br><br>

    <?php
    if ($submitbutton){
        if ($number > $randomnumber) {
            echo 'Sinu pakutud nr oli liiga suur';
        }
        else if ($number < $randomnumber) {
            echo 'Sinu pakutud nr oli liiga suur';
        } else {
            echo 'Sa panid numbriga täppi';
        }
    }
    ?>
    <br><br>
    <input type="submit" name="submit" value="Search"/><br><br>
</form>