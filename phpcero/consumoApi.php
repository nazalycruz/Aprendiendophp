<?php 
    $url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

    //opciones para consumir el servicio y requiere de lectura a sitios de https
    // verify_peer activa o desactiva solicitudes https
    $opciones = array("ssl" => array("verify_peer" => false, "verify_peer_name" => false));

    // file_get_contents permite leer la infomracion y decodificarlo en objetos u arraglos
    // stream_context_create desactiva las restricciones que se tienes sobre el https y poder leer el contenido
    $respuesta = file_get_contents($url, false, stream_context_create($opciones));

    //json_decode realiza la conversion de string en objetos
    $objRespuesta = json_decode($respuesta);

    // print_r($respuesta);
    // print_r($objRespuesta);

   
?>
    <ul>
        <?php  foreach($objRespuesta ->list as $video){ ?>
        <li>
        <?php echo $video->title; ?>
        </li>
        <?php } ?>
</ul>

