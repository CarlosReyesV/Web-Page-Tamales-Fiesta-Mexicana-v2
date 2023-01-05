<?php

include("conect.php");
$con=conectar();

$id_proveedor=$_POST['id_proveedor'];
$Nombre=$_POST['Nombre'];
$Tipo=$_POST['Tipo'];
$Ciudad=$_POST['Ciudad'];
$Telefono=$_POST['Telefono'];

$sql="UPDATE proveedores SET  Nombre='$Nombre',Tipo='$Tipo',Ciudad='$Ciudad',Telefono='$Telefono' WHERE id_proveedor='$id_proveedor'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/edit.php");
    }
?>