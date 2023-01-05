<?php
$servername = "127.0.0.1";
$username = "Don Tamal";
$password = "Rojo23YV3rde";
$db_name = "fiesta_mx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

if(isset($_POST['submit'])){
    if(!empty($_POST['Clave']) && !empty($_POST['Descripcion']) && !empty($_POST['Precio_llevar']) && !empty($_POST['Precio_mesas']) && !empty($_POST['Costo'])){
        
        $Clave = $_POST['Clave'];
        $Descripcion = $_POST['Descripcion'];
        $Precio_llevar = $_POST['Precio_llevar'];
        $Precio_mesas = $_POST['Precio_mesas'];
        $Costo = $_POST['Costo'];

        $query = "INSERT INTO productos(Clave,Descripcion,Precio_llevar,Precio_mesas,Costo) VALUES('$Clave','$Descripcion','$Precio_llevar','$Precio_mesas','$Costo')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

    }
    header("location:../tablas/editP.php");
        exit;

};
?>