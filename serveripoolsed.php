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

echo $isik->eesnimi." ".$isik->perenimi." (".$isik->vanus.")";
echo "<br>";

if($eesnimi_algab_vokaaliga){
    echo "Eesnimi algab vokaaliga."."<br>";
}
?>