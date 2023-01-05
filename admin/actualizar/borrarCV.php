<?php

include("conect.php");
$con=conectar();

$id_cventa=$_GET['id'];

$sql="DELETE FROM cancelar_venta  WHERE id_cventa='$id_cventa'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editCV.php");
    }
?>