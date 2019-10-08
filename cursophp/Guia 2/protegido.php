<?php
    class Carro{
        protected var $ruedas;
        protected var $color;
        protected var $motor;

        function get_ruedas(){
            return $this->ruedas;
        }
        function get_motor(){
            return $this->ruedas;
        }
        function Carro(){ //Metodo constructor 
            $this->ruedas=4;
            $this-> color="";
            $this-> motor=1600;
        }
        function arrancar(){
            echo "Estoy arrancando";
        }
        function girar(){
            echo "Estoy girando";
        }
        function frenar(){
            echo "Estoy girando";
        }
        function define_color($color_carro){
            $this->color=$color_carro;
            echo "el color del carro es:".$this->color."<br>";
        }
    }
    class camion extends carro{
        var $ruedas;
        var $color;
        var $motor;

        function camion(){ //Metodo constructor 
            $this->ruedas=8;
            $this-> color="";
            $this-> motor=2600;
        }
        function arrancar(){
            Parent::arracar();
            echo "Camino en marcha";
            echo "Estoy arrancando";
        }
        function girar(){
            echo "Estoy girando";
        }
        function frenar(){
            echo "Estoy girando";
        }
        function define_color($color_carro){
            $this->color=$color_carro;
            echo "el color del carro es:".$this->color."<br>";
        }
    }

?>
