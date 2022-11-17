<?php 
    // CONSTRUCTOR

    class persona{
        public $nombre;
        public $edad;
        public $altura;

        //construye el objeto apartir de un dato inicial
        function __construct($nuevoNombre){
            $this-> nombre = $nuevoNombre;
        }

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
    // se  indica una instancia con un valor incial para ello realizamos el metodo constructor
    $objAlumno = new persona("oscar uh");
    //llamando al metodo
    
    $objAlumno -> imprimirnombre();

?>