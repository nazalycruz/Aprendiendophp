<?php include_once '../portafolio/cabecera.php' ?>
<?php include_once '../portafolio/conexion.php' ?>

<?php  
//instanciando conexion
$objconexion = new conexion();

if($_POST){

    // var_dump($_POST);
    $nombre = $_POST['txtnombre'];
    $imagen = $_FILES['txtarchivo']['name'];

    if($nombre != "" && $imagen != ""){
        $sql = "INSERT INTO `proyectos` (`id_proyecto`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', 'insertando');";
        $objconexion->Ejecutar($sql);
    }else{
        echo '<script>alert("FAVOR DE LLENAR LOS TODOS LOS CAMPOS")</script>';
    }


}

$sql = "SELECT * FROM proyectos";
$respuesta = ($objconexion->Sentencia($sql));

// var_dump($respuesta);
?>

<br/>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        Nombre del proyecto: <input class="form-control" type="text" name="txtnombre" id="">
                        <br/>
                        Imagen del proyecto: <input class="form-control" type="file" name="txtarchivo" id="">
                        <br/>
                        <input class="btn btn-success" type="submit" value="Enviar proyecto">
                    </form>
                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre </th>
                            <th scope="col">Imagen </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($respuesta as $item){?>
                        <tr class="">
                            <td><?php echo $item['id_proyecto'] ?></td>
                            <td scope="row"><?php echo $item['nombre']?></td>
                            <td><?php echo $item['imagen']?></td>
                           <td><button type="button" name="" id="" class="btn btn-danger">Eliminar</button></td>
                        </tr>
                    <?php } ?>  
                    </tbody>
                </table>
            </div>
            
        </div>
        
    </div>
</div>



<?php include_once '../portafolio/pie.php' ?>