<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Insertar Venta Cancelada</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="conAgregarCV.php" method="POST">
                                <input type="date" class="form-control mb-3" name="Fecha" placeholder="Fecha">
                                <input type="time" class="form-control mb-3" name="Hora" placeholder="Hora">
                                <input type="text" class="form-control mb-3" name="Ticket" placeholder="Ticket">
                                <input type="text" class="form-control mb-3" name="Cancelar" placeholder="Cancelar">
                                
                            <input type="submit" class="btn btn-primary btn-block" name="submit">
                    </form>
                    
                </div>
    </body>
</html>