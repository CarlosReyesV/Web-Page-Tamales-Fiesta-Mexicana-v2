<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Insertar Productos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="conAgregarP.php" method="POST">
                                <input type="text" class="form-control mb-3" name="Clave" placeholder="Clave">
                                <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion">
                                <input type="text" class="form-control mb-3" name="Precio_llevar" placeholder="Precio_llevar">
                                <input type="text" class="form-control mb-3" name="Precio_mesas" placeholder="Precio_mesas">
                                <input type="text" class="form-control mb-3" name="Costo" placeholder="Costo">
                            <input type="submit" class="btn btn-primary btn-block" name="submit">
                    </form>
                    
                </div>
    </body>
</html>