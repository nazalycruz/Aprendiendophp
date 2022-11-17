<?php 
    session_start();
    //manejador de errores
    error_reporting(0);
    (!is_null($_SESSION["usuario"]) ? session_destroy() : test());

    function test(){
        echo "sin sesión";
    }
    // if(!isset($_SESSION["usuario"])){
    //     session_destroy();
    //     echo "sesion destruida";
    // }else{
    //     echo "sin sesion";
    // }
?>


