<?php
session_start();

$DATABASE_HOST = "127.0.0.1";
$DATABASE_USER = "Don Tamal";
$DATABASE_PASS = "Rojo23YV3rde";
$DATABASE_NAME = "fiesta_mx";
$alerta = "Usuario incorrecto/Contraseña incorrecta";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Conexion fallida: ' . mysqli_connect_error());
}

if ( !isset($_POST['userNmeAdm'], $_POST['userPssAdm']) ) {
	exit('Porfavor llena todos los campos!');
}

if ($stmt = $con->prepare('SELECT id_usuario, Contraseña FROM usuarios WHERE Nombre = ?')) {
	$stmt->bind_param('s', $_POST['userNmeAdm']);
	$stmt->execute();
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
    
        if ($_POST['userNmeAdm'] === 'JefeSuc' or $_POST['userNmeAdm'] === 'AdmSuc') {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['userNmeAdm'];
            $_SESSION['id'] = $id;
            header("location:index.php");
    
        } else {
            echo '<script">alert("' . $alerta . '");</script>';
            header("location:login.php");
        }
    } else {
        echo '<script">alert("' . $alerta . '");</script>';
        header("location:login.php");
    }

	$stmt->close();
}

?> 