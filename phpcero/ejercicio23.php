<?php 
    // HERENCIA

use persona as GlobalPersona;

    class persona{
        public $nombre;
        public $edad;
        public $altura;

        public function asignarNombre($nuevoNombre){
            $this->nombre = ($nuevoNombre);
        }

        public function imprimirnombre(){
            echo "Hola soy ". $this->nombre . "</br>";
        }

        public function mostrarEdad(){
            $this->edad = 20;
            return $this->edad;
        }
    }

    class trabajador extends persona{
        public $puesto;

        public function presentarTrabajador(){
            echo "Hola soy " . $this->nombre . "con el puesto de: ". $this->puesto;
        }

    }

    //creando el objeto(instanciando)
    $objTrabajador = new trabajador();
    //llamando al metodo
    $objTrabajador -> asignarNombre("Oscar Uh");
    $objTrabajador -> puesto = "profesor";
    $objTrabajador -> presentarTrabajador();

  

?>