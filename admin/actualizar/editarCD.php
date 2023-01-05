<?php

include("conect.php");
$con=conectar();

$id_corte=$_POST['id_corte'];
$Concepto=$_POST['Concepto'];
$Producto=$_POST['Producto'];
$Cantidad=$_POST['Cantidad'];
$Importe=$_POST['Importe'];

$sql="UPDATE corte_dia SET  Concepto='$Concepto',Producto='$Producto',Cantidad='$Cantidad',Importe='$Importe' WHERE id_corte='$id_corte'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editCD.php");
    }
?>