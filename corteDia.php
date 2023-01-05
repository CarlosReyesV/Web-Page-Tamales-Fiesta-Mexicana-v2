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
    <link rel="stylesheet" href="css/estilosMenu.css" />
    <title>"Tamales Fiesta Mexicana"</title>
    <!-- Bootstrap Responsive Desing-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS para tablas -->
    <link rel="stylesheet" href="css/estilosTablas.css">
</head>
<body>
    <header class="mainheader">
        <nav class="navheader">
            <a href="menu.php">
                <img src="img/general/logo2.png" class="logo">
            </a>
            <!-- <a class="butAjust">
                <button><i class="fa-solid fa-gear fa-spin" style="--fa-animation-duration: 7s;"></i>Ajustes</button>
            </a> -->
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
                <a href="nuevaVenta.php">Nueva venta</a>
                <a href="cancelarVenta.php">Cancelar venta</a>
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
        <div class="areaTabla">
            <h3>Corte del dia</h3>
            <br>
            <!-- Boton de busqueda -->
            <section class="buscarF">
                <button class="capturaBtn" onclick="document.getElementById('capturaID').style.display='block'">Capturar</button>
            </section>
            <!-- Boton de busqueda -->
            <div class="folio">
                <section class="buscarF">
                    <form action="" method="GET">
                        <input type="text" placeholder="Ingresa el motivo..." name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>">
                        <button type="submit"><i class="fa fa-search"></i></button>
                        <br>
                    </form>
                </section>
            </div>
            <!-- Modalbox para Capturar información -->
            <div id="capturaID" class="modalCaptura">
                <form class="modal-content animate" action="insertarCD.php" method="POST">
                    <div class="exitC">
                        <span onclick="document.getElementById('capturaID').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                    <div class="container">
                        <label for="concepto">Concepto:</label>
                        <input type="text" name="concepto">
                        <label for="producto">Productos:</label>
                        <input type="text" name="producto">
                        <label for="cantidad">Cantidad:</label>
                        <input type="text" name="cantidad">
                        <label for="importe">Importe:</label>
                        <input type="text" name="importe">
                        <button type="submit" id="confirmBtn" name="submit">Confirmar</button>
                    </div>
                </form>
            </div>
            <!-- Tabla de informacion -->
            <section class="tProductos">
            <h4>Consulta</h4>
                <?php 
                $servername = "127.0.0.1";
                $username = "empleado1";
                $password = "ChampuRRAD01";
                $db_name = "fiesta_mx";
                
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $db_name);
                if(isset($_GET['search']))
                {
                    $filtervalues = $_GET['search'];
                    $query = "SELECT * FROM corte_dia WHERE CONCAT(Concepto,Producto,Cantidad,Importe) LIKE '%$filtervalues%' ";
                    $query_run = mysqli_query($conn, $query);
                if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $items)
                        {
                            ?>
                            <table class='table'>
                                <tr>
                                    <th>ID</th>
                                    <th>Concepto</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Importe</th>
                                </tr>
                                <tr>
                                    <td><?= $items['id_corte']; ?></td>
                                    <td><?= $items['Concepto']; ?></td>
                                    <td><?= $items['Producto']; ?></td>
                                    <td><?= $items['Cantidad']; ?></td>
                                    <td><?= $items['Importe']; ?></td>
                                </tr>
                            </table>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <tr>
                                <td colspan="4">No Record Found</td>
                            </tr>
                        <?php
                    }
                }
            ?>
                <?php
                include("bdPHP/conexionCRD.php");
                ?>
            </section> 
            <!-- Total del corte -->
            <h5>Total cantidad:
                    <?php
                        $host="127.0.0.1";
                        $user="empleado1";
                        $pass="ChampuRRAD01";
                        $bd="fiesta_mx";

                        $con=mysqli_connect($host,$user,$pass);

                        mysqli_select_db($con,$bd);
                        
                        $sql = "SELECT sum(Cantidad) FROM corte_dia";
                        $q = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($q);
                        
                        echo '' . $row[0];
                    ?>
                </h5>
                <h5>Total importe:
                    <?php
                        $host="127.0.0.1";
                        $user="empleado1";
                        $pass="ChampuRRAD01";
                        $bd="fiesta_mx";

                        $con=mysqli_connect($host,$user,$pass);

                        mysqli_select_db($con,$bd);
                            
                        $sql = "SELECT sum(Importe) FROM corte_dia";
                        $q = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($q);
                            
                        echo '' . $row[0];
                    ?>
                </h5>
        </div>
    </main>
    <footer class="mainfooter">
        <h3>Copyright © 2022, Tamales Fiesta Mexicana</h3>
    </footer>
    <script src="https://kit.fontawesome.com/2d73307e5c.js" crossorigin="anonymous"></script>
    <!-- Inicio de sesion y menu principal -->
    <script src="js/menuIndex.js" type="text/javascript"></script>
    <!-- Funciones de las tablas -->
    <script async src="js/tabla.js"></script>
</body>
</html>