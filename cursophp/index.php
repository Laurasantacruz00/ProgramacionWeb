<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .resaltar{
            color: #F00;
            font-weight:bold;
        }
    </style>
</head>
<body>

    
        <!-- print "Bienvenido al curso de PHP <br>";
        print "Hola alumnos <br>";
        print "Hasta el proximo video <br>";
        
        $nombre="Estudiante";
        $edad=18;
        print $nombre;
        //Concatenar con un mensaje
        print "El nombre del usuario".$nombre;
        print "El nombre del usuario es $nombre";
        //$nombre1=Estudiante;
        //echo nombre;
        echo "el nombre es".$nombre."y tiene".$edad."años";
    
        $a = 8;
        echo ++%a;
        echo "<br/>";
        echo $a;

        //Operadores
        $a = ($b = 4) + 5;

        $a = 3;
        $a += 5;
        $b = "Hola ";
        $b .= "ahí!";

        //String

        $a = "Hello";
        $b = $a."World";
        $a = "Hello";
        $a .= "World"; -->
    
    <!-- 
        function dameDatos(){
            echo "este es el mensaje del interior de la funcion <br>";
        } 
    -->
    <!-- //Flujo de ejecucion de un programa php
         echo "Este es el primer mensaje <br>";
         include("proporciona_datos.php");
         echo "Este es el segundo mensaje <br>";
         dameDatos();

         $nombre="Laura";

         function dameNombre(){
             global $nombre;
             $nombre="El nombre es ".$nombre;
         }

        dameNombre();
        echo $nombre;  -->
    
    <?php
         
        
        /*function incrementaVariable(){
            static $contador = 0; //Para que el valor no se destruya
            $contador++;

            echo $contador."<br>";
        }
        incrementaVariable();
        incrementaVariable();
        
        incrementaVariable();
        incrementaVariable();
        */

        $nombre="Laura";
        echo 'Hola $nombre';

        $variable1="Casa";
        $variable2="CASA";
        
        //Strcmp: La función retorna un número entero mayor, igual, o menor que cero, apropiadamente según la cadena apuntada por str1 es mayor, igual, o menor que la cadena str2(alfabéticamente).

        //strcasecmp: Devuelve 1 si no coinciden las dos cadenas de string o 0 si coinciden

        $resultado = strcasecmp($variable1,$variable2);

        if($resultado){
            echo "No Coinciden";
        }else{
            echo "Coinciden";
        }

        $variable1=8;
        $variable2=8;
        $variable3="Laura";

        if($variable1 == $variable2){
            echo "Son iguales";
        }else{
            echo "No son iguales";
        }
        if($variable1 === $variable3){
            echo "Son iguales";
        }else{
            echo "No son iguales";
        }
    ?>


</body>
</html>