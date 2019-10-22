<?php
$nation=$_GET['nation'];
$age=$_GET['age'];
$edu=$_GET['edu'];

if(strlen($age)>0){
    if($nation=='et' and $age>=18 and $edu!='basic'){
        echo 'Sobib sõjaväkke';
    }
}

else{
    echo 'Ei sobi sõjaväkke';
}
