<?php
session_start();

$DATABASE_HOST = "127.0.0.1";
$DATABASE_USER = "empleado1";
$DATABASE_PASS = "ChampuRRAD01";
$DATABASE_NAME = "fiesta_mx";
$alerta = "Usuario incorrecto/Contraseña incorrecta";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Conexion fallida: ' . mysqli_connect_error());
}

if ( !isset($_POST['user_name'], $_POST['user_password']) ) {
	exit('Porfavor llena todos los campos!');
}

if ($stmt = $con->prepare('SELECT id_usuario, Contraseña FROM usuarios WHERE Nombre = ?')) {
	$stmt->bind_param('s', $_POST['user_name']);
	$stmt->execute();
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
    
        if ($_POST['user_password'] === $password) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['user_name'];
            $_SESSION['id'] = $id;
            header("location:menu.php");
    
        } else {
            echo '<script">alert("' . $alerta . '");</script>';
            header("location:index.php");
        }
    } else {
        echo '<script">alert("' . $alerta . '");</script>';
        header("location:index.php");
    }

	$stmt->close();
}

?> 