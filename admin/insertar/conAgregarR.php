<?php
$servername = "127.0.0.1";
$username = "Don Tamal";
$password = "Rojo23YV3rde";
$db_name = "fiesta_mx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

if(isset($_POST['submit'])){
    if(!empty($_POST['Clave']) && !empty($_POST['Producto']) && !empty($_POST['Existencia'])){
        
        $Clave = $_POST['Clave'];
        $Producto = $_POST['Producto'];
        $Existencia = $_POST['Existencia'];

        $query = "INSERT INTO reporte_existencias(Clave,Producto,Existencia) VALUES('$Clave','$Producto','$Existencia')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

    }
    header("location:../tablas/editR.php");
        exit;

};
?>