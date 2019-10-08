<?php
    include("vehiculos.php");
    //include("protegido.php");

    $audi = new Carro();
    $audi->girar();
    $audi->define_color("rojo");

    //Vehiculos nuevos
    $mazda = new Carro();

    echo "El mazda tiene: ".$mazda->ruedas."ruedas <br>";

    $mazda->arrancar();
    $mazda->girar();
    $mazda->frenar();
    $mazda->define_color("negro");
    
    $bmw = new Carro();

    echo "El bmw tiene: ".$mazda->get_ruedas()."ruedas <br>";
    
    echo "El camion pegaso tiene: ".$mazda->get_motor()."motor <br>";

    $bmw->arrancar();
    $bmw->girar();
    $bmw->frenar();
    $bmw->define_color("azul");

    $chevrolet = new Carro();

    $chevrolet->arrancar();
    $chevrolet->girar();
    $chevrolet->frenar();
    $chevrolet->define_color("amarillo");
    
    $pegaso = new camion();

    echo "El camion pegaso tiene: ".$mazda->get_ruedas()."ruedas <br>";
    echo "El camion pegaso tiene: ".$mazda->get_motor()."motor <br>";
?>