<?php
//ARRAYS INDEXADOS Tienen indices para acceder o referirnos a cada valor almacenado $mis_numeros[2]

//ALMACENAR Y MOSTRAR 
/*    $semana[]="Lunes";
    $semana[]="Martes";
    $semana[]="Miercoles";

    $semana[0]="Lunes";
    $semana[1]="Martes";
    $semana[2]="Miercoles";

    $semana[1]="Lunes";
    $semana[2]="Martes";
    $semana[3]="Miercoles";
    
    $semana=array("Lunes","Martes","Miercoles","Jueves");

    echo $semana[3];

    sort($semana);
//Recorrer arreglos con longitud deconocida for($i=0; $i<count($semana);i++)
*/

    $semana[0]="Lunes";
    $semana[1]="Martes";
    $semana[2]="Miercoles";
    $semana[3]="Jueves";
    $semana[4]="Viernes";
    $semana[5]="Sabado";
    
    echo "<br>";
    echo "<br>";
    
    for($i=0; $i<count($semana); $i++){
        echo $semana[$i]."<br>";
    }
    $semana[]="Domingo";
    
    echo "<br>";
    echo "<br>";
    
    for($i=0; $i<count($semana); $i++){
        echo $semana[$i]."<br>";
    }
    sort($semana);
    
    echo "<br>";
    echo "<br>";

    for($i=0; $i<count($semana); $i++){
        echo $semana[$i]."<br>";
    }

    echo "<br>";
    echo "<br>";

//ARRAYS ASOCIATIVOS Puedes asociar los nombres de las posiciones del arreglo con cualquier nombre siempre que cumpla las reglas descritas. Ojo el nombre que le coloques, aplica para todas las posiciones del mismo arreglo $mis_numeros["valor 3"]

    $datos=array("Nombre"=>"Juan","Apellido"=>"Hernandez","Edad"=>21);

    //echo $datos["Nombre"]."<br>";

//Identificar si una variable es un array
    //$datos="bogota";

    if(is_array($datos)){
        echo "Es un array <br>";
    }else{
        echo "No es un array <br>";
    }

    echo "<br>";
    echo "<br>";
//Recorrer
    foreach($datos as $clave=>$valor){
        echo "A $clave le corresponde $valor <br>";
    }

    echo "<br>";
    echo "<br>";
//Agregar elementos
    $datos["Pais"]="Colombia";

    foreach($datos as $clave=>$valor){
        echo "A $clave le corresponde $valor <br>";
    }
    echo "<br>";
    echo "<br>";

//ARRAYS MULTIDIMENSIONALES
    $animales=array("Mamiferos"=>array("Domesticos"=>"Perro",
                                        "Granja"=>"Cerdo",
                                        "Otros"=>"Jirafa"),
                        "Peces"=>array("Mar"=>"Tiburon",
                                        "Rio"=>"Bocachico"),
                        "Aves"=>array("Rapaces"=>"Aguila",
                                        "Corral"=>"Gallina"),
                        "Anfibios"=>array("Anuro"=>"Ranas",
                                        "Caudados"=>"Salamandra"),
                        "Reptiles"=>array("Crocodylia"=>"Cocodrilos",
                    "Quelonios"=>"Tortugas"));

    echo $animales["Mamiferos"]["Domesticos"];

    Foreach ($animales as $clave_Anim=>$animal){
        //quiero que imprima Mamiferos, peces y aves
        echo "$clave_Anim <br>";

/*Ahora requiero desplegar la segunda dimensión que es un array despliego la segunda dimensión haciendo uso de la función list. Debo crear un nombre identificativo para el nombre asociativo del primer elemento “Domestico” y para el primer elemento como tal “Perro” */

        While (list ($clave, $valor)= each( $animal ) ){
/*le estoy indicando que por cada arreglo de la segunda dimensión lo despliegue en su clave (Domesticos, Granja, Otros, Mar, Rio, Rapaces, Corral ) y su valor (Perro, Cerdo, Jirafa, Tiburon, Bocachico, Aguila, Gallina), adicionalmente le estamos indicando que haga esta operación mientras existan elementos en la lista*/
        echo "$clave = $valor <br>";
        }
        echo "<br>"; 
    }
    echo "<br>";

    echo var_dump($animales);
    echo "<br>";
    echo "<br>";

   //TRABAJO
   
   array(size=3)
        'fruta'=>
        array (size=3)
            'tropical'=>string 'kiwi' (length=4)
            'citrico'=>string 'mandarina' (length=9)
            'otros'=>string 'manzana' (length=7)
        'leche'=>
        array (size=2)
            'animal'=>string 'vaca' (length=4)
            'vegetal'=>string 'coco' (length=4)
        'carne'=>
        array (size=2)
            'vacuno'=>string 'lomo' (length=4)
            'porcino'=>string 'pata' (length=4)
?>