<?php 
    include("conect.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM ajustes WHERE id_ajustes='$id'";
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
                    <form action="editarCA.php" method="POST">
                    
                                <input type="hidden" name="id_ajustes" value="<?php echo $row['id_ajustes']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Producto" placeholder="Producto" value="<?php echo $row['Producto']  ?>">
                                <input type="text" class="form-control mb-3" name="Motivo_ajuste" placeholder="Motivo_ajuste" value="<?php echo $row['Motivo_ajuste']  ?>">
                                <input type="text" class="form-control mb-3" name="Entrada" placeholder="Entrada" value="<?php echo $row['Entrada']  ?>">
                                <input type="text" class="form-control mb-3" name="Salida" placeholder="Salida" value="<?php echo $row['Salida']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>