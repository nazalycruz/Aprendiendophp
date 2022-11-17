<?php 
    class persona{
        public $nombre;
        public $edad;

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

    //creando el objeto(instanciando)
    $objAlumno = new persona();
    //llamando al metodo
    $objAlumno -> asignarNombre("Oscar");

    $objAlumno2 = new persona();
    $objAlumno2 ->asignarNombre("Pedro");
    $objAlumno2 ->imprimirnombre();
    $objAlumno2 ->mostrarEdad();
    //imprimir la propiedad
    echo $objAlumno->nombre."<br/>";
    echo $objAlumno2->nombre."<br/>";
    echo $objAlumno2->edad;

?>