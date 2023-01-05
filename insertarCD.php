<?php
$servername = "127.0.0.1";
$username = "empleado1";
$password = "ChampuRRAD01";
$db_name = "fiesta_mx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

if(isset($_POST['submit'])){
    if(!empty($_POST['concepto']) && !empty($_POST['producto']) && !empty($_POST['cantidad']) && !empty($_POST['importe'])){
        
        $concepto = $_POST['concepto'];
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $importe = $_POST['importe'];

        $query = "INSERT INTO corte_dia(Concepto,Producto,Cantidad,Importe) VALUES('$concepto','$producto','$cantidad','$importe')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());
    }
    header("location:corteDia.php");
        exit;

};
?>