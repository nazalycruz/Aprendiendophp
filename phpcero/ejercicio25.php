<?php 
    class unClase{
        public static function unMetodo(){
            echo "Hola soy un metodo statico";
        }
    }

    // $obj = new unClase();
    // $obj -> unMetodo();

    //referenciando al metodo statico
    unClase::unMetodo();
?>