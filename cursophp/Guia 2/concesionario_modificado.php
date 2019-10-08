<?php

    class compra_vehiculo{
        private $precio_base;
        private static $descuento_impuesto=700000;
        $valor_final=$this->precio_base-self::$descuento_impuesto;

        
        compra_vehiculo::$descuento_gobierno();
    }
    static function descuento_gobierno(){
        if(date("m-d-y")>"10-10-17"){
            self::$descuento_impuesto=700000;
        }
    }
    
?>