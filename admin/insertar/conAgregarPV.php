<?php
$servername = "127.0.0.1";
$username = "Don Tamal";
$password = "Rojo23YV3rde";
$db_name = "fiesta_mx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

if(isset($_POST['submit'])){
    if(!empty($_POST['Nombre']) && !empty($_POST['Tipo']) && !empty($_POST['Ciudad']) && !empty($_POST['Telefono'])){
        
        $Nombre = $_POST['Nombre'];
        $Tipo = $_POST['Tipo'];
        $Ciudad = $_POST['Ciudad'];
        $Telefono = $_POST['Telefono'];

        $query = "INSERT INTO proveedores(Nombre,Tipo,Ciudad,Telefono) VALUES('$Nombre','$Tipo','$Ciudad','$Telefono')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

    }
    header("location:../tablas/edit.php");
        exit;

};
?>