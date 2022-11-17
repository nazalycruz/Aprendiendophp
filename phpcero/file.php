<?php 
    if($_POST){
        // print_r($_POST['archivo']);
        print_r($_FILES['archivo']);
        print_r($_FILES['archivo']['name']);
        
        $dir = "archivos/imagenes/";

        //mkdir crea un directorio o carpeta
        //rm permite eliminar el directorio o carpeta
        //is_dir permite saber si existe o no un directorio
        //file_exists permite saber si un archivo existe
        $pathFile = mkdir($dir, 0777, true);
        // if (!file_exists($pathFile)) {
        //     mkdir($pathFile, 0777, true);
        // }

        move_uploaded_file($_FILES['archivo']['tmp_name'], $pathFile.$_FILES['archivo']['name']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajando con Archivo</title>
</head>
<body>
    
    <form action="file.php" method="POST" enctype="multipart/form-data">
        Imagen:
        <br/>
        <input type="file" name="archivo" id="">
        <br/>
        <input type="submit" name="enviar" value="Enviar informacion">
    </form>
</body>
</html>