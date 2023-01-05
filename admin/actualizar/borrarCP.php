<?php

include("conect.php");
$con=conectar();

$id_proovedor=$_GET['id'];

$sql="DELETE FROM compra_proveedor  WHERE id_proovedor='$id_proovedor'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editCP.php");
    }
?>