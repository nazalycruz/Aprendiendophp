<?php
class conexion{
    private $servidor = "localhost";
    private $usuario = "root";
    private $contrasenia = "";
    private $conexion;

    public function __construct(){
        try{
            $this->conexion = new PDO("mysql:host = $this->servidor;dbname=album",$this->usuario, $this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch( PDOException $er){
            return "falla de conexion".$er;
        }
    }

    public function Ejecutar($sql){
        $this->conexion->exec($sql);
        //lastinsertId --devuelve el ID de la ultima fila o secuencia insertada
        return $this->conexion->lastInsertId();
    }

    public function Sentencia($sql){
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();

        return $sentencia->fetchAll();

    }


}

?>