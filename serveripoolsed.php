<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="?" method="post">
    Kass: <input name="kass"><br>
    <input type="submit">
</form>


</body>
</html>

<?php

class pseudo{}

$isik=new pseudo();
$isik->eesnimi="Martin";
$isik->perenimi="Kooga";
$isik->vanus=23;
$isik->sugu="mees";
$num1 = 1.23;
$num2 = 2.34;

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
echo $num1+$num2." ";
echo "<br>";
echo htmlspecialchars($_GET["koer"]);
if($_POST["kass"]){
    echo "Kass oli ".$_POST["kass"];
}

?>