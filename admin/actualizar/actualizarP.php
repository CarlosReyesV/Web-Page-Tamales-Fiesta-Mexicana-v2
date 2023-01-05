<?php 
    include("conect.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM productos WHERE id_producto='$id'";
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
                    <form action="editarP.php" method="POST">
                    
                                <input type="hidden" name="id_producto" value="<?php echo $row['id_producto']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Clave" placeholder="Clave" value="<?php echo $row['Clave']  ?>">
                                <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion" value="<?php echo $row['Descripcion']  ?>">
                                <input type="text" class="form-control mb-3" name="Precio_llevar" placeholder="Precio_llevar" value="<?php echo $row['Precio_llevar']  ?>">
                                <input type="text" class="form-control mb-3" name="Precio_mesas" placeholder="Precio_mesas" value="<?php echo $row['Precio_mesas']  ?>">
                                <input type="text" class="form-control mb-3" name="Costo" placeholder="Costo" value="<?php echo $row['Costo']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>