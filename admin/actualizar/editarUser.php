<?php

include("conect.php");
$con=conectar();

$id_usuario=$_POST['id_usuario'];
$Nombre=$_POST['Nombre'];
$Contraseña=$_POST['Contraseña'];
$Tipo_usuario=$_POST['Tipo_usuario'];

$sql="UPDATE usuarios SET  Nombre='$Nombre',Contraseña='$Contraseña',Tipo_usuario='$Tipo_usuario' WHERE id_usuario='$id_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/usuarios.php");
    }
?>