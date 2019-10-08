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
        include("concesionario_modificado.php");
        compra_vehiculo::$descuento_impuesto=700000;

        $compra_antonio=new compra_vehiculo("Automovil");
        
    ?>
</body>
</html>