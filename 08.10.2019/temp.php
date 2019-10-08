
<?php
$temp=-20;

if ($temp<=-20){
    echo 'Temperatuur on ' .$temp. '<body style="background: rgba(0,0,255,0.95)">';
}

elseif ($temp>-20 and $temp<=0){
    echo 'Temperatuur on '. $temp. '<body style="background: lightblue">';
}

elseif ($temp>0 and $temp<=10){
    echo 'Temperatuur on ' .$temp. '<body style="background: green">';
}

else{
    echo 'Temperatuur on ' .$temp. '<body style="background: yellow">';
}
