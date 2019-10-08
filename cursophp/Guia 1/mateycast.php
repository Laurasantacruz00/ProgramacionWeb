<?php
    /*Aleatoreo*/
    $num1=rand(10,50);
    echo "El numero es: ". $num1;

    /*Redondeo*/
    $num1=5.7556454;
    echo "El numero es: ". round($num1,2);

    /*Casting*/
    $num1="5";
    $num1+=2;

    echo "El numero es: ".$num1;

    /*Casting explicito*/
    $num1="5";
    $resultado=(int)$num1;

    /*Precedencia de los operadores*/
    $var1=true;
    $var2=false;

    $resultado = $var1 && $var2;

    if($resultado == true){
        echo "correcto";
    }else{
        echo "Incorrecto";
    }

    /*If anidados*/

    if(isset($_POST["enviando"])){
        $edad=$_POST["edad_usuario"];
        
        /*if($edad <= 18){
            echo "Eres menos de edad";
        }else if($edad <= 65){
            echo "eres maduro";
        }else{
            echo "Cu&iacute;date";
        }*/
        /*condicion ?  valor si verdadero : valor si falso*/
        echo $edad<18 ? "Eres menor de edad. No puedes acceder":"Puedes acceder";
        
        $contra=$_POST["contra"];
        $nombre=$_POST["nombre_usuario"];

        $resultado = $nombre=="Juan" && $contra=="1234" ? "puedes acceder":"No puedes acceder";

        echo $resultado;
    }

    /*Estructura switch-case*/
    
    if(isset($_POST["enviando"])){
        $contra=$_POST["contra_usuario"];
        $nombre=$_POST["nonbre_usuario"];

        switch(true):
            case $nombre=="Juan" && $contra=="1234";
                echo "Usuario autorizado. Hola Juan";
            break;
            case $nombre=="María" && $contra=="5555";
                echo "Usuario autorizado. Hola María";
            break;    
            case $nombre=="Pedro" && $contra=="1111";
                echo "Usuario autorizado. Hola Pedro";
            break;
            default:
                echo "Usuario no autorizado";
        endswitch;
    }

    $var1=1;

    /*While
    while($var1 < 6){
        echo "Estamos ejecutando el codigo del bucle <br>";
        $var1++;
    }
    echo "Hemos salido del bucle"*/

    do{
        echo "Estamos ejecutando el codigo del bucle <br>";
        $var1++;
    }while($var1<6);

    echo "Hemos salido del bucle";

    for($i=0;$i<=10;$i++){
        echo "<p> Hemos entrado en el bucle </p>";
    }
    /*Break*/
    for($i=0;$i<=10;$i++){
        echo "<p> Hemos entrado en el bucle </p>";
        if($i==6){
            echo "<p> Bucle interrumpido</p>";
            break;
        }
    }
?>
