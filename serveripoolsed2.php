<?php

class pseudo{

    var $eesnimi;
    var $perenimi;
    var $vanus;
}

$isik=new pseudo(

);
$isik->eesnimi="Martin";
$isik->perenimi="Kooga";
$isik->vanus=23;
$isik->sugu="mees";


$eesnimi_algab_vokaaliga=false;

function eesnimi_algab_vokaaliga($t��p){

    $vowels = array('A', 'E', 'I', 'O', 'U', '�', '�', '�', '�', 'a', 'e', 'i', 'o', 'u', '�', '�', '�', '�');
    $eesnime_array=str_split((string)$t��p->eesnimi);

    if(in_array($eesnime_array[0],$vowels)){
        return true;
    }

}


echo $isik->eesnimi." ".$isik->perenimi." (".$isik->vanus.")";
echo "<br>";

if($eesnimi_algab_vokaaliga){
    echo "Eesnimi algab vokaaliga."."<br>";
}
?>