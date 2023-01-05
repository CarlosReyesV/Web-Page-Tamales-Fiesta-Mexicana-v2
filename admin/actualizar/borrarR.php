<?php

include("conect.php");
$con=conectar();

$id_re=$_GET['id'];

$sql="DELETE FROM reporte_existencias  WHERE id_re='$id_re'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editR.php");
    }
?>