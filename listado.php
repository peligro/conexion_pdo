<?php
require_once("clases/productos.php");
$p=new Productos();
$datos=$p->getProductos();
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
                <h1>Listado de Usuarios</h1>
                <?php
                if(isset($_GET["m"]) and $_GET["m"]==1)
                {
                    ?>
            <span class="label label-success">Se ha agregado el registro exitosamente</span>
                    <?php
                }
                ?>
                <p>
                    <a href="agregar.php" class="btn btn-success">Agregar</a>
                </p>
                
            <table class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                    foreach($datos as $dato)
                    {
                        ?>
                        <tr>
                            <td><?php echo $dato["id"]?> </td>
                            <td><?php echo $dato["nombre"]?> </td>
                            <td>$<?php echo number_format($dato["precio"],0,"",".");?></td>
                            <td><?php echo substr($dato["descripcion"],0,50)?>.... </td>
                            <td><?php echo $dato["fecha_creacion"]?> </td>                           <td>
                                <a href=""><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                <a href=""><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                            </td>   
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </body>
    </html>
