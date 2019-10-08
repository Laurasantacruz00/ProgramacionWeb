<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    
    include(“vehiculos.php”);

    $audi=new Carro();
    $mazda=new Carro();
    $ferrari=new Carro();
    
    $audi->girar();

    echo "El Audi tiene " . $audi->get_ruedas() . "ruedas <br>";
?>
</body>
</html>