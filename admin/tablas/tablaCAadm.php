<?php
$servername = "127.0.0.1";
$username = "empleado1";
$password = "ChampuRRAD01";
$db_name = "fiesta_mx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from ajustes";
$query = mysqli_query($conn,$sql);

if(!$query){
    die("Error". mysqli_connect_error($conn));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Editar</title>
    <link href="css/estilosTablas.css" rel="stylesheet">
</head>
<body>
    <section class="tProductos">
        <table class="table">
            <thead class="table-success table-striped" >
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Motivo</th>
                    <th>Entrada</th>
                    <th>Salida</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        while($row=mysqli_fetch_array($query)){
                    ?>
                        <tr>
                            <th><?php  echo $row['id_ajustes']?></th>
                            <th><?php  echo $row['Producto']?></th>
                            <th><?php  echo $row['Motivo_ajuste']?></th>
                            <th><?php  echo $row['Entrada']?></th>
                            <th><?php  echo $row['Salida']?></th>    
                            <th><a href="../actualizar/actualizarCA.php?id=<?php echo $row['id_ajustes'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="../actualizar/borrarCA.php?id=<?php echo $row['id_ajustes'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                        </tr>
                    <?php 
                        }
                    ?>
            </tbody>
        </table>
    </section>
</body>
</html>