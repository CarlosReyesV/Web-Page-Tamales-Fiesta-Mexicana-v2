<?php 
    include("conect.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM cancelar_venta WHERE id_cventa='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="editarCV.php" method="POST">
                    
                                <input type="hidden" name="id_cventa" value="<?php echo $row['id_cventa']  ?>">
                                <input type="date" class="form-control mb-3" name="Fecha" placeholder="Fecha" value="<?php echo $row['Fecha']  ?>">
                                <input type="time" class="form-control mb-3" name="Hora" placeholder="Hora" value="<?php echo $row['Hora']  ?>">
                                <input type="text" class="form-control mb-3" name="Ticket" placeholder="Ticket" value="<?php echo $row['Ticket']  ?>">
                                <input type="text" class="form-control mb-3" name="Cancelar" placeholder="Cancelar" value="<?php echo $row['Cancelar']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>