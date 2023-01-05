<?php
$servername = "127.0.0.1";
$username = "Don Tamal";
$password = "Rojo23YV3rde";
$db_name = "fiesta_mx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

if(isset($_POST['submit'])){
    if(!empty($_POST['Concepto']) && !empty($_POST['Producto']) && !empty($_POST['Cantidad']) && !empty($_POST['Importe'])){
        
        $Concepto = $_POST['Concepto'];
        $Producto = $_POST['Producto'];
        $Cantidad = $_POST['Cantidad'];
        $Importe = $_POST['Importe'];

        $query = "INSERT INTO corte_dia(Concepto,Producto,Cantidad,Importe) VALUES('$Concepto','$Producto','$Cantidad','$Importe')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

    }
    header("location:../tablas/editCD.php");
        exit;

};
?>