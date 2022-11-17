<?php 
// permite crear informacion que se va mantener en todas las paginas mientras el navegador este abierto
session_start();

$_SESSION["usuario"] = "zaly";
$_SESSION["estatus"] = "logueado";

echo "Sesion iniciada ". $_SESSION["usuario"]. " estatus " . $_SESSION["estatus"];


?>