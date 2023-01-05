<?php

include("conect.php");
$con=conectar();

$id_ajustes=$_POST['id_ajustes'];
$Producto=$_POST['Producto'];
$Motivo_ajuste=$_POST['Motivo_ajuste'];
$Entrada=$_POST['Entrada'];
$Salida=$_POST['Salida'];

$sql="UPDATE ajustes SET  Producto='$Producto',Motivo_ajuste='$Motivo_ajuste',Entrada='$Entrada',Salida='$Salida' WHERE id_ajustes='$id_ajustes'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editCA.php");
    }
?>