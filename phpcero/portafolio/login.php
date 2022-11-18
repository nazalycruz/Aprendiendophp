<?php
    session_start();
    if($_POST){
        if(($_POST['txtusuario'] == 'zaly') && ($_POST['txtcontrasenia'] == '123')){
            //creando la variablde de sesion para poder validar si se esta loguado y visualiza la indormacion en otra vista
            $_SESSION['usuario'] = 'zaly';
            //Redireccionando del login a la pagina principal una ves loguado
            header("Location: index.php");
        }else{
            echo "<script> alert('usuario o contraseña incorrectos')</script>";
        }

    }
 
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <!-- uso de bs5- elemento a integrar para que sea mas rapido la contruccion del cuerpo o diseño el plugin boostrap 5 snippet nos permite realizar 
    esto. Ademas evitamos la discrepancia de etiquetas no cerradas o faltantes. Ejemplo 
    bs5 grid container para el contenedor principal 
    bs5-grid-row para las columnas de la fila -->
    
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Inicio Sesion
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            Usuario: <input class="form-control" type="text" name="txtusuario" id="usuario">
                            <br/>
                            Password : <input class="form-control" type="text" name="txtcontrasenia" id="contrasenia">
                            <br/>
                            <button type="submit" class="btn btn-success">Entrar al portafolio</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>

        
    </div>  
    
</body>

</html>
