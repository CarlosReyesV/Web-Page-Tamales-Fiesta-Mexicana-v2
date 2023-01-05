<?php
$servername = "127.0.0.1";
$username = "Don Tamal";
$password = "Rojo23YV3rde";
$db_name = "fiesta_mx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

if(isset($_POST['submit'])){
    if(!empty($_POST['Fecha']) && !empty($_POST['Hora']) && !empty($_POST['Ticket']) && !empty($_POST['Cancelar'])){
        
        $Fecha = $_POST['Fecha'];
        $Hora = $_POST['Hora'];
        $Ticket = $_POST['Ticket'];
        $Cancelar = $_POST['Cancelar'];

        $query = "INSERT INTO cancelar_venta(Fecha,Hora,Ticket,Cancelar) VALUES('$Fecha','$Hora','$Ticket','$Cancelar')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

    }
    header("location:../tablas/editCV.php");
        exit;

};
?>