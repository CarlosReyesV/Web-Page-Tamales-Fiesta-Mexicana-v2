<?php

include("conect.php");
$con=conectar();

$id_NV=$_GET['id'];

$sql="DELETE FROM nueva_venta  WHERE id_NV='$id_NV'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editNV.php");
    }
?>