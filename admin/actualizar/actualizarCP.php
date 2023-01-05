<?php 
    include("conect.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM compra_proveedor WHERE id_proovedor='$id'";
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
                    <form action="editarCP.php" method="POST">
                    
                                <input type="hidden" name="id_proovedor" value="<?php echo $row['id_proovedor']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Referencia" placeholder="Referencia" value="<?php echo $row['Referencia']  ?>">
                                <input type="date" class="form-control mb-3" name="Fecha" placeholder="Fecha" value="<?php echo $row['Fecha']  ?>">
                                <input type="text" class="form-control mb-3" name="Compra" placeholder="Compra" value="<?php echo $row['Compra']  ?>">
                                <input type="text" class="form-control mb-3" name="Numero" placeholder="Numero" value="<?php echo $row['Numero']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>