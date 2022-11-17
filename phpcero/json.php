<?php 
    
    $jsonContenido = '[
        {"nombre":"zaly", "apellido":"cruz"},
        {"nombre":"pedro", "apellido":"cruz"}
    ]';

    // var_dump($jsonContenido);
    
    // json_decode convierte el json string en un formato de objetos para poder ser interpretado
    $resultado = json_decode($jsonContenido);
    var_dump($resultado);

    //con el foreach hacemos el recorrido del los objetos y mostramos en pantalla cada atributo.
    foreach($resultado as $persona){
        echo ($persona->nombre). " " .($persona->apellido) . "<br/>" ;
    }

    // ARREGLO A JSON
    $persona = array("oscar" => 40, "jose" =>35, "marisa" =>38);

   echo json_encode($persona);



?>