<?php

include("conect.php");
$con=conectar();

$id_corte=$_GET['id'];

$sql="DELETE FROM corte_dia  WHERE id_corte='$id_corte'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editCD.php");
    }
?>