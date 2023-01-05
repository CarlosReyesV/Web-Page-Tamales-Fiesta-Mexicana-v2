<?php

include("conect.php");
$con=conectar();

$id_proovedor=$_POST['id_proovedor'];
$Nombre=$_POST['Nombre'];
$Referencia=$_POST['Referencia'];
$Fecha=$_POST['Fecha'];
$Compra=$_POST['Compra'];
$Numero=$_POST['Numero'];

$sql="UPDATE compra_proveedor SET  Nombre='$Nombre',Referencia='$Referencia',Fecha='$Fecha',Compra='$Compra',Numero='$Numero' WHERE id_proovedor='$id_proovedor'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editCP.php");
    }
?>