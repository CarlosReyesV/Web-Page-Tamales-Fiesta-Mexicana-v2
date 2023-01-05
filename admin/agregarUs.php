<?php
$servername = "127.0.0.1";
$username = "Don Tamal";
$password = "Rojo23YV3rde";
$db_name = "fiesta_mx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

if(isset($_POST['submit'])){
    if(!empty($_POST['nombre']) && !empty($_POST['contraseña']) && !empty($_POST['tipo'])){
        
        $nombre = $_POST['nombre'];
        $contraseña = $_POST['contraseña'];
        $tipo = $_POST['tipo'];

        $query = "INSERT INTO usuarios(Nombre,Contraseña,Tipo_usuario) VALUES('$nombre','$contraseña','$tipo')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

    }
    header("location:tablas/usuarios.php");
        exit;

};
?>