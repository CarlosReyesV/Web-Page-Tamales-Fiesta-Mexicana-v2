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

$sql = "select * from nueva_venta";
$query = mysqli_query($conn,$sql);

if(!$query){
    die("Error". mysqli_connect_error($conn));
}
echo"
    <table class='table'>
    <tr>
    <th>Producto</th>
    <th>Existencia</th>
    <th>Cantidad</th>
    <th>Descuento</th>
    <th>Piezas_Litros</th>
    <th>Precio_Unitario</th>
    <th>Precio</th>";

    while ($row = mysqli_fetch_array($query))
    {
        echo'<tr>
        <td>'.$row['Producto'].'</td>
        <td>'.$row['Existencia'].'</td>
        <td>'.$row['Cantidad'].'</td>
        <td>'.$row['Descuento'].'</td>
        <td>'.$row['Piezas_Litros'].'</td>
        <td>'.$row['Precio_Unitario'].'</td>
        <td>'.$row['Precio'].'</td>
        </tr>';
    }

    echo "</table>";
?>