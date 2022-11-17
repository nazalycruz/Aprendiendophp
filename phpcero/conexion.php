<?php 
    $servidor = "localhost";
    $usuario = "root";
    $contrasenia = "";

    //try-catch funciona como condicional para errores del sistema
    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
        $conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //insertando informacion en bd con php ENVIAR INFO
        $sql = "INSERT INTO `fotos` (`id_foto`, `nombre_foto`, `ruta`) VALUES (NULL, 'jugando con la programacion', 'foto.jpg')";
        $conexion->exec($sql);
         
        //INTERACTUANDO CON LA BD TRAER INFO
        $sql = "SELECT * FROM `fotos`";
        //se crea una sentencia que ejecute el pdo para almacenar en una sentencia y poder ejecutarla
        $sentencia = $conexion -> prepare($sql);
        $sentencia->execute();
        //fetchAll traera toda la informacion obtenida en sentencia y lo almacenara en otra variable
        $resultado = $sentencia ->fetchAll();

        print_r($resultado);

        foreach($resultado as $foto){
            echo $foto['nombre_foto'] . "<br/>";
        }

        echo "conexion establecida";
    }catch(PDOException $error){
        echo "Conexion erronea".$error;
    }
?>