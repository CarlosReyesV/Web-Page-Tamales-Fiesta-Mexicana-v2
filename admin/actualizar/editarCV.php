<?php

include("conect.php");
$con=conectar();

$id_cventa=$_POST['id_cventa'];
$Fecha=$_POST['Fecha'];
$Hora=$_POST['Hora'];
$Ticket=$_POST['Ticket'];
$Cancelar=$_POST['Cancelar'];

$sql="UPDATE cancelar_venta SET Fecha='$Fecha',Hora='$Hora',Ticket='$Ticket',Cancelar='$Cancelar' WHERE id_cventa='$id_cventa'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location:../tablas/editCV.php");
    }
?>