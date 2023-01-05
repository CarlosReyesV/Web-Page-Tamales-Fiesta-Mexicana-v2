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

$sql = "select * from cancelar_venta";
$query = mysqli_query($conn,$sql);

if(!$query){
    die("Error". mysqli_connect_error($conn));
}
echo"
    <table class='table'>
    <tr>
    <th>Fecha</th>
    <th>Hora</th>
    <th>Ticket</th>
    <th>Cancelar</th>";

    while ($row = mysqli_fetch_array($query))
    {
        echo'<tr>
        <td>'.$row['Fecha'].'</td>
        <td>'.$row['Hora'].'</td>
        <td>'.$row['Ticket'].'</td>
        <td>'.$row['Cancelar'].'</td>
        </tr>';
    }

    echo "</table>";
?>