<?php

class pseudo{}

$isik=new pseudo();
$isik->eesnimi="Martin";
$isik->perenimi="Kooga";
$isik->vanus=23;
$isik->sugu="mees";


$eesnimi_algab_vokaaliga=false;

print_r($isik);
echo "<br>";

if($eesnimi_algab_vokaaliga){
    echo "Eesnimi algab vokaaliga."."<br>";
}
?>