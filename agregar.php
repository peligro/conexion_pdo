<?php
require_once("clases/productos.php");
$p=new Productos();
if(isset($_POST["nom"]))
{
    $id= $p->insertar();
    header("Location: listado.php?m=1&id=".$id);
}
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>..:: Listado de Productos ::..</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
        </head>
        <body>
            <div class="container">
            <ol class="breadcrumb">
              <li><a href="listado.php">Listado</a></li>
              <li class="active">Agregar Usuario</li>
            </ol>
                <h1>Agregar Usuario</h1>
                <form name="form" method="post" action="">
                
                    <div class="form-group">
                        <label for="nombre">Nombre Producto</label>
                        <input type="text" class="form-control" placeholder="Nombre:" name="nom" />
                    </div>
                    
                    <div class="form-group">
                        <label for="des">Descripción</label>
                        <input type="text" class="form-control" placeholder="Descripción:" name="des" />
                    </div>
                    
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" placeholder="Precio:" name="precio" />
                    </div>
                    
                    <div class="form-group">
                        <label for="fecha">Fecha Creación</label>
                        <input type="date" class="form-control" name="fecha" />
                    </div>
                    <button type="submit" class="btn btn-default">Enviar</button>
                </form>
            </div>
        </body>
    </html>
