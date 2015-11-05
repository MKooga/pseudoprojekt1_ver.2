<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

if($_GET['page']){
    require $_GET['page'].".php";
}

?>

</body>
</html>