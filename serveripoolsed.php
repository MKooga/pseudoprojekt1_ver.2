<?php

$isik=[
    "eesnimi"=>"Martin",
    "perenimi"=>"Kooga",
    "vanus"=>23,
];


$eesnimi_algab_vokaaliga=false;

echo $isik["eesnimi"]." ".$isik["perenimi"]." (".$isik["vanus"].")<br>";

if($eesnimi_algab_vokaaliga){
    echo "Eesnimi algab vokaaliga."."<br>";
}
?>