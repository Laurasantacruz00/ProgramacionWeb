<?php
    class Compra_vehiculo{
        private $precio_base;
        function Compra_vehiculo($gama){
            if($gama=="Automovil"){
                $this->precio_base=25000000;
            }else if($gama=="Camioneta"){
                $this->precio_base=65000000;
            }
            else if($gama=="Van"){
                $this->precio_base=75000000;
            }
        }//fin constructor
        
        function aire_acondicionado(){
            $this->precio_base+=3000000;
        }// fin aire_acondicionado
        
        function navegador_gps(){
            $this->precio_base+=1000000;
        }//fin navegador gps
        
        function tapiceria_cuero($color){
            if($color=="blanco"){
                $this->precio_base+=1000000;
            }
            else if($color=="beige"){
                $this->precio_base+=1500000;
            }
            else{
                $this->precio_base+=700000;
            }
        }// fin tapicería

        function adicional(){
            $this->precio_base+=2000000;
        }
        function vidriosYEquipo(){
            $this->precio_base+=1800000;
        }
        function descuento(){
            $this->precio_base-=700000;
        }
        //diseñar la función precio final para que se comporte conforme lo solicitado en el ejercicio de la guía
    
        function precio_final(){
            return $this->precio_base;
        }// fin precio final
    }// fin clase
?>