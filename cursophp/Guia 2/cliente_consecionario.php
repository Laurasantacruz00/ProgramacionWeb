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
    include("concesionario.php");
    // Compra_vehiculo::$descuento_impuesto=7000000;
    //instanciamos un comprador que compra un vehículo tipo Camioneta
    //el precio base de antonio de compra por el vehículo es 65 millones
    $compra_Antonio=new Compra_vehiculo("Camioneta");
    $compra_Antonio->aire_acondicionado();
    /* esta función tapiceria, tiene un comportamiento para Antonio y otro para Ana, lo que significa que cada instancia tiene una copia de los atributos y funciones de la clase, acá vemos claramente que cada método se comporta de una forma diferente para cada objeto.*/

    /*luego de los adicionales incluyendo un adicional de $2.000.000 (Dos millones de pesos) por vidrios eléctricos y Equipo de alta gama de sonido por un valor de 1.800.000 (Un millón ochocientos mil pesos) y luego de hacer el descuento de los 700.000 mil pesos otorgados por el gobierno nacional al precio total del vehículo. */
    $compra_Antonio->tapiceria_cuero("blanco");
    $compra_Antonio->adicional();
    $compra_Antonio->vidriosYEquipo();
    $compra_Antonio->descuento();
    
    echo "<br>El precio final de Antonio ".$compra_Antonio->precio_final() . "<br>";
    
    $compra_Ana=new Compra_vehiculo("Camioneta");
    $compra_Ana->aire_acondicionado();
    $compra_Ana->tapiceria_cuero("rojo");
    $compra_Ana->adicional();
    $compra_Ana->vidriosYEquipo();
    $compra_Ana->descuento();

    echo "<br>El precio final de Ana ".$compra_Ana->precio_final();
?>
</body>
</html>