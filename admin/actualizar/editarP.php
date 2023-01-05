<?php

include("conect.php");
$con=conectar();

$id_producto=$_POST['id_producto'];
$Clave=$_POST['Clave'];
$Descripcion=$_POST['Descripcion'];
$Precio_llevar=$_POST['Precio_llevar'];
$Precio_mesas=$_POST['Precio_mesas'];
$Costo=$_POST['Costo'];

$sql="UPDATE productos SET  Clave='$Clave',Descripcion='$Descripcion',Precio_llevar='$Precio_llevar',Precio_mesas='$Precio_mesas',Costo='$Costo' WHERE id_producto='$id_producto'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editP.php");
    }
?>