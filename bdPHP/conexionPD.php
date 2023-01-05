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

$sql = "select * from productos";
$query = mysqli_query($conn,$sql);

if(!$query){
    die("Error". mysqli_connect_error($conn));
}
echo"
    <table class='table'>
    <tr>
    <th>Clave</th>
    <th>Descripcion</th>
    <th>Precio_llevar</th>
    <th>Precio_mesas</th>
    <th>Costo</th>";

    while ($row = mysqli_fetch_array($query))
    {
        echo'<tr>
        <td>'.$row['Clave'].'</td>
        <td>'.$row['Descripcion'].'</td>
        <td>'.$row['Precio_llevar'].'</td>
        <td>'.$row['Precio_mesas'].'</td>
        <td>'.$row['Costo'].'</td>
        </tr>';
    }

    echo "</table>";
?>