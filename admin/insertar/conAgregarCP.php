<?php
$servername = "127.0.0.1";
$username = "Don Tamal";
$password = "Rojo23YV3rde";
$db_name = "fiesta_mx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

if(isset($_POST['submit'])){
    if(!empty($_POST['Nombre']) && !empty($_POST['Referencia']) && !empty($_POST['Fecha']) && !empty($_POST['Compra']) && !empty($_POST['Numero'])){
        
        $Nombre = $_POST['Nombre'];
        $Referencia = $_POST['Referencia'];
        $Fecha = $_POST['Fecha'];
        $Compra = $_POST['Compra'];
        $Numero = $_POST['Numero'];

        $query = "INSERT INTO compra_proveedor(Nombre,Referencia,Fecha,Compra,Numero) VALUES('$Nombre','$Referencia','$Fecha','$Compra','$Numero')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

    }
    header("location:../tablas/editCP.php");
        exit;

};
?>