<?php
$servername = "127.0.0.1";
$username = "Don Tamal";
$password = "Rojo23YV3rde";
$db_name = "fiesta_mx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

if(isset($_POST['submit'])){
    if(!empty($_POST['Producto']) && !empty($_POST['Existencia']) && !empty($_POST['Cantidad']) && !empty($_POST['Descuento']) && !empty($_POST['Piezas_Litros'])&& !empty($_POST['Precio_Unitario'])&& !empty($_POST['Precio'])){
        
        $Producto = $_POST['Producto'];
        $Existencia = $_POST['Existencia'];
        $Cantidad = $_POST['Cantidad'];
        $Descuento = $_POST['Descuento'];
        $Piezas_Litros = $_POST['Piezas_Litros'];
        $Precio_Unitario = $_POST['Precio_Unitario'];
        $Precio = $_POST['Precio'];

        $query = "INSERT INTO nueva_venta(Producto,Existencia,Cantidad,Descuento,Piezas_Litros,Precio_Unitario,Precio) VALUES('$Producto','$Existencia','$Cantidad','$Descuento','$Piezas_Litros','$Precio_Unitario','$Precio')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

    }
    header("location:../tablas/editNV.php");
        exit;

};
?>