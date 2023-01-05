<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Insertar Nueva Venta</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="conAgregarNV.php" method="POST">
                                <input type="text" class="form-control mb-3" name="Producto" placeholder="Producto">
                                <input type="text" class="form-control mb-3" name="Existencia" placeholder="Existencia">
                                <input type="text" class="form-control mb-3" name="Cantidad" placeholder="Cantidad">
                                <input type="text" class="form-control mb-3" name="Descuento" placeholder="Descuento">
                                <input type="text" class="form-control mb-3" name="Piezas_Litros" placeholder="Piezas_Litros">
                                <input type="text" class="form-control mb-3" name="Precio_Unitario" placeholder="Precio_Unitario">
                                <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio">
                            <input type="submit" class="btn btn-primary btn-block" name="submit">
                    </form>
                    
                </div>
    </body>
</html>