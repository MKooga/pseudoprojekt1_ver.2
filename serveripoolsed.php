<?php

class pseudo{}

$isik=new pseudo();
$isik->eesnimi="Martin";
$isik->perenimi="Kooga";
$isik->vanus=23;
$isik->sugu="mees";


function eesnimi_algab_vokaaliga($t��p){

    $vowels = array('A', 'E', 'I', 'O', 'U', '�', '�', '�', '�');
    $eesnime_array=str_split((string)$t��p->eesnimi);

    if(in_array($eesnime_array[0],$vowels)){
        return true;
    }

}

print_r($isik);
echo "<br>";

if(eesnimi_algab_vokaaliga($isik)){
    echo "Eesnimi algab vokaaliga."."<br>";
}
?>