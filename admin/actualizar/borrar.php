<?php

include("conect.php");
$con=conectar();

$id_proveedor=$_GET['id'];

$sql="DELETE FROM proveedores  WHERE id_proveedor='$id_proveedor'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/edit.php");
    }
?>