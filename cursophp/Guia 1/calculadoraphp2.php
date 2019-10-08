<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .resultado{
        color:#F00;
        font-weight: : bold;
        font-size: 32px;
    }
    </style>
</head>
<body>
<?php
    if(isset($_POST["button"])){
        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        $operacion=$_POST["operacion"];

        calcular($operacion);
    }
    function calcular($calculo){
        if(!strcmp("Suma", $calculo)){
            global $numero1;
            global $numero2;
            
            echo "<p class='resultado'>El resultado es: ".($numero1+$numero2);
        }
        if(!strcmp("Resta", $calculo)){
            echo "El resultado es: ".($numero1-$numero2);
        }
        if(!strcmp("Multiplicacion", $calculo)){
            global $numero1;
            global $numero2;
            echo "<p class='resultado'>El resultado es: ".($numero1*$numero2);
        }
        if(!strcmp("Division", $calculo)){
            global $numero1;
            global $numero2;
            echo "<p class='resultado'>El resultado es: ".($numero1/$numero2);
        }
        if(!strcmp("Modulo", $calculo)){
            global $numero1;
            global $numero2;
            echo "<p class='resultado'>El resultado es: ".($numero1%$numero2);
        }
    }    
?>
</body>
</html>
