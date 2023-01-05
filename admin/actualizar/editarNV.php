<?php

include("conect.php");
$con=conectar();

$id_NV=$_POST['id_NV'];
$Producto=$_POST['Producto'];
$Existencia=$_POST['Existencia'];
$Cantidad=$_POST['Cantidad'];
$Descuento=$_POST['Descuento'];
$Piezas_Litros=$_POST['Piezas_Litros'];
$Precio_Unitario=$_POST['Precio_Unitario'];
$Precio=$_POST['Precio'];

$sql="UPDATE nueva_venta SET Producto='$Producto',Existencia='$Existencia',Cantidad='$Cantidad',Descuento='$Descuento',Piezas_Litros='$Piezas_Litros',Precio_Unitario='$Precio_Unitario',Precio='$Precio' WHERE id_NV='$id_NV'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editNV.php");
    }
?>