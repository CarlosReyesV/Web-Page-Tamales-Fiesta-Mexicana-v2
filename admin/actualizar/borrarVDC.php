<?php

include("conect.php");
$con=conectar();

$id_rvc=$_GET['id'];

$sql="DELETE FROM report_venta_corte  WHERE id_rvc='$id_rvc'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editVDC.php");
    }
?>