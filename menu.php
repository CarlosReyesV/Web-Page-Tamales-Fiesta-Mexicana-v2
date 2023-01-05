<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>"Tamales Fiesta Mexicana"</title>
    <!-- Bootstrap Responsive Desing-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS para tablas -->
    <link rel="stylesheet" href="css/estilosTablas.css">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/estilosMenu.css" />
</head>
<body>
    <!-- Banner -->
    <header class="mainheader">
        <nav class="navheader">
            <a href="menu.php">
                <img src="img/general/logo2.png" class="logo">
            </a>
            <a class="butUser">
                <button onclick="window.location.href='salirU.php'"><i class="fas fa-user"></i>Cerrar sesión</button>
            </a>
        </nav>
    </header>
    <main class="mainpart">
        <!-- Barra lateral izquierda -->
        <section class="barraIzq">
        <div class="ajustes">
            <button class="btnGene">Ajustes</button>
            <div class="dropGene">
            <!--<a href="opciones.php">Realizar</a>-->
            <a href="consultar.php">Consultar</a>
            </div>
        </div>
        <div class="generales">
            <button class="btnGene">Generales</button>
            <div class="dropGene">
            <a href="productos.php">Productos</a>
            <a href="proveedores.php">Proveedores</a>
            </div>
        </div>
        <div class="operacion">
            <button class="btnOpera">Operación</button>
            <div class="dropOpera">
            <a href="corteDia.php">Corte del dia</a>
            <a href="compraProv.php">Compra al proveedor</a>
            <a href="cancelarVenta.php">Cancelar venta</a>
            <a href="nuevaVenta.php">Nueva venta</a>
            </div>
        </div>
        <div class="reportes">
            <button class="btnRepo">Reportes</button>
            <div class="dropRepo">
            <a href="reporteExi.php">Reporte de existencias</a>
            <a href="ventaDsCor.php">Ventas después del corte</a>
            </div>
        </div>
        <div class="soporte">
            <button class="sopB"><a href='adminSalirU.php' style="text-decoration: none; color: white;">Usuario</a></button>
            <button class="sopB" onclick="cerrarD()">Cerrar el dia</button>
        </div> 
        </section>
        
    </main>
    <footer class="mainfooter">
        <h3>Copyright © 2022, Tamales Fiesta Mexicana</h3>
    </footer>
    <script src="https://kit.fontawesome.com/2d73307e5c.js" crossorigin="anonymous"></script>
    <!-- Inicio de sesion y menu principal -->
    <script src="js/menuIndex.js" type="text/javascript"></script> 
</body>
</html>