<?php
$servername = "127.0.0.1";
$username = "Don Tamal";
$password = "Rojo23YV3rde";
$db_name = "fiesta_mx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

if(isset($_POST['submit'])){
    if(!empty($_POST['Producto']) && !empty($_POST['Motivo_ajuste']) && !empty($_POST['Entrada']) && !empty($_POST['Salida'])){
        
        $Producto = $_POST['Producto'];
        $Motivo_ajuste = $_POST['Motivo_ajuste'];
        $Entrada = $_POST['Entrada'];
        $Salida = $_POST['Salida'];

        $query = "INSERT INTO ajustes(Producto,Motivo_ajuste,Entrada,Salida) VALUES('$Producto','$Motivo_ajuste','$Entrada','$Salida')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

    }
    header("location:../tablas/editCA.php");
        exit;

};
?>