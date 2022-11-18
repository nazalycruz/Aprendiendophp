<?php include_once '../portafolio/cabecera.php' ?>

<br/>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post">
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
                        <tr class="">
                            <td scope="row">R1C1</td>
                            <td>R1C2</td>
                            <td>R1C3</td>
                        </tr>
                        <tr class="">
                            <td scope="row">Item</td>
                            <td>Item</td>
                            <td>Item</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
        
    </div>
</div>



<?php include_once '../portafolio/pie.php' ?>