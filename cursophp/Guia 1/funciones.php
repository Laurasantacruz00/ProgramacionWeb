<?php
    function suma($num1, $num2){
        $resultado = $num1+$num2;
        return $resultado;
    }

    function frase_mayus($frase, $conversacion=true){
        $frase=strtolower($frase);

        if($conversacion==true){
            $resultado=ucwords($frase);
        }else{
            $resultado=strtoupper($frase);
        }

        return $resultado;
    }

    function incrementa($valor1){
        $valor1++;
        return $valor1;
    }
    
    $numero=7;
    echo incrementa($numero);
    echo(frase_mayus("esto es una prueba",false));
    suma(5,7);
?>