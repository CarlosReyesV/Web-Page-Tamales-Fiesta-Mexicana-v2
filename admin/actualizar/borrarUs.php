<?php

include("conect.php");
$con=conectar();

$id_usuario=$_GET['id'];

$sql="DELETE FROM usuarios  WHERE id_usuario='$id_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/usuarios.php");
    }
?>