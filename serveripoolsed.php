<?php

class pseudo{}

$isik=new pseudo();
$isik->eesnimi="Martin";
$isik->perenimi="Kooga";
$isik->vanus=23;
$isik->sugu="mees";
$num1 = 1.23;
$num2 = 2.34;

function eesnimi_algab_vokaaliga($tüüp){

    $vowels = array('A', 'E', 'I', 'O', 'U', 'Õ', 'Ä', 'Ö', 'Ü');
    $eesnime_array=str_split((string)$tüüp->eesnimi);

    if(in_array($eesnime_array[0],$vowels)){
        return true;
    }

}

print_r($isik);
echo "<br>";

if(eesnimi_algab_vokaaliga($isik)){
    echo "Eesnimi algab vokaaliga."."<br>";
}
echo $num1+$num2." ";
?>