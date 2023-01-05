<?php
function conectar(){
    $host="127.0.0.1";
    $user="empleado1";
    $pass="ChampuRRAD01";
    $bd="fiesta_mx";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>