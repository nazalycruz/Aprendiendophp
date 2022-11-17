<?php 
    $txtnombre = "";
    $txtlenguaje ="";
    $chk1 = "";
    $chk2 = "";
    $chk3 = "";
    $lsAnime= "";
    $txtcomentarios = "";

    if($_POST){
        $txtnombre = (isset($_POST['txtnombre'])) ? $_POST['txtnombre'] : "";
        $txtlenguaje = (isset($_POST['lenguajes'])) ? $_POST['lenguajes'] : "";
        // var_dump($_POST['txtnombre']);
        $chk1 = (isset($_POST['chk1'])) ? "checked": "";
        $chk2 = (isset($_POST['chk2'])) ? "checked": "";
        $chk3 = (isset($_POST['chk3'])) ? "checked": "";

        $lsAnime = (isset($_POST['lsAnime'])) ? $_POST['lsAnime'] : "";

        $txtcomentarios = (isset($_POST['txtcomentarios'])) ? $_POST['txtcomentarios'] : "";


        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de inf: Formularios</title>
</head>
<body>
    <?php if($_POST){?>
        <strong>Hola</strong>: <?php echo $txtnombre;?><br/>
        <strong>Elejiste</strong> :<?php echo $txtlenguaje;?> <br/>
        <strong>Opciones</strong> : 
        - <?php echo ($chk1 == "checked") ? "1" : "";?>
        - <?php echo ($chk2 == "checked") ? "2" : "";?>
        - <?php echo ($chk3 == "checked") ? "3" : "";?><br/>
        <strong>Selección</strong> : <?php echo $lsAnime;?><br/>
        <strong>Tu comentario</strong>  : <?php echo $txtcomentarios ?>

  
    <?php } ?>
    <form action="formulario.php" method="post">
        <input value="<?php echo $txtnombre?>" type="text" name="txtnombre" id="">
        <br/>
        Elije: <br/>
        <br/>php <input type="radio" <?php echo ($txtlenguaje == "php") ? "checked": ""?> name="lenguajes" id="" value="php" > <br/>
        <br/>html <input type="radio" <?php echo ($txtlenguaje == "html") ? "checked" : ""?> name="lenguajes" id="" value="html"> <br/>
        <br/>css <input type="radio" <?php echo ($txtlenguaje == "css") ? "checked" : ""?> name="lenguajes" id="" value="css"> <br/>
        
        check...<br/>
        <br/> 1 <input type="checkbox" <?php echo $chk1?> name="chk1" value="si" id=""><br/>
        <br/> 2 <input type="checkbox" <?php echo $chk2?> name="chk2" value="si" id=""><br/>
        <br/> 3 <input type="checkbox" <?php echo $chk3?> name="chk3" value="si" id=""><br/>
        <select name="lsAnime" id="">
            <option value="">Selecciona</option>
            <option value="Naruto" <?php echo ($lsAnime == 'Naruto') ? "selected" : ""?>>Naruto</option>
            <option value="Bleach" <?php echo ($lsAnime == 'Bleach') ? "selected": ""?>>Bleach</option>
            <option value="Dragon" <?php echo ($lsAnime == 'Dragon') ? "selected" : ""?>>Dragon Ball Z</option>
        </select>
        <br/>

        Comentarios : 
        <br/>
        <textarea name="txtcomentarios" id="" cols="30" rows="5" style="resize:none" ><?php echo $txtcomentarios?></textarea>
        <br/>
        <input type="submit" value="Enviar Información">
    </form>
    
</body>
</html>