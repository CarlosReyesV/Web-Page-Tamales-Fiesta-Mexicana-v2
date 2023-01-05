<?php

include("conect.php");
$con=conectar();

$id_ajustes=$_GET['id'];

$sql="DELETE FROM ajustes  WHERE id_ajustes='$id_ajustes'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editCA.php");
    }
?>