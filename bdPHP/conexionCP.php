<?php
$servername = "127.0.0.1";
$username = "empleado1";
$password = "ChampuRRAD01";
$db_name = "fiesta_mx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from compra_proveedor";
$query = mysqli_query($conn,$sql);

if(!$query){
    die("Error". mysqli_connect_error($conn));
}
echo"
    <table class='table'>
    <tr>
    <th>Nombre</th>
    <th>Referencia</th>
    <th>Fecha</th>
    <th>Compra</th>
    <th>Numero</th>";

    while ($row = mysqli_fetch_array($query))
    {
        echo'<tr>
        <td>'.$row['Nombre'].'</td>
        <td>'.$row['Referencia'].'</td>
        <td>'.$row['Fecha'].'</td>
        <td>'.$row['Compra'].'</td>
        <td>'.$row['Numero'].'</td>
        </tr>';
    }

    echo "</table>";
?>