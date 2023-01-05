<?php

include("conect.php");
$con=conectar();

$id_re=$_POST['id_re'];
$Clave=$_POST['Clave'];
$Producto=$_POST['Producto'];
$Existencia=$_POST['Existencia'];

$sql="UPDATE reporte_existencias SET  Clave='$Clave',Producto='$Producto',Existencia='$Existencia' WHERE id_re='$id_re'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editR.php");
    }
?>