<?php

include("conect.php");
$con=conectar();

$id_rvc=$_POST['id_rvc'];
$Concepto=$_POST['Concepto'];
$Producto=$_POST['Producto'];
$Cantidad=$_POST['Cantidad'];
$Importe=$_POST['Importe'];

$sql="UPDATE report_venta_corte SET  Concepto='$Concepto',Producto='$Producto',Cantidad='$Cantidad',Importe='$Importe' WHERE id_rvc='$id_rvc'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editVDC.php");
    }
?>