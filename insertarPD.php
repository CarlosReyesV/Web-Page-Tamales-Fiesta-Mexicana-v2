<?php
$servername = "127.0.0.1";
$username = "empleado1";
$password = "ChampuRRAD01";
$db_name = "fiesta_mx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

if(isset($_POST['submit'])){
    if(!empty($_POST['clave']) && !empty($_POST['descripcion']) && !empty($_POST['precio_llevar']) && !empty($_POST['precio_mesas']) && !empty($_POST['costo'])){
        
        $clave = $_POST['clave'];
        $descripcion = $_POST['descripcion'];
        $precio_llevar = $_POST['precio_llevar'];
        $precio_mesas = $_POST['precio_mesas'];
        $costo = $_POST['costo'];

        $query = "INSERT INTO productos(Clave,Descripcion,Precio_llevar,Precio_mesas,Costo) VALUES('$clave','$descripcion','$precio_llevar','$precio_mesas','$costo')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

    }
    header("location:productos.php");
        exit;

};
?>