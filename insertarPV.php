<?php
$servername = "127.0.0.1";
$username = "empleado1";
$password = "ChampuRRAD01";
$db_name = "fiesta_mx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

if(isset($_POST['submit'])){
    if(!empty($_POST['nombre']) && !empty($_POST['tipo']) && !empty($_POST['ciudad']) && !empty($_POST['telefono'])){
        
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $ciudad = $_POST['ciudad'];
        $telefono = $_POST['telefono'];

        $query = "INSERT INTO proveedores(Nombre,Tipo,Ciudad,Telefono) VALUES('$nombre','$tipo','$ciudad','$telefono')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

    }
    header("location:proveedores.php");
        exit;
};
?>