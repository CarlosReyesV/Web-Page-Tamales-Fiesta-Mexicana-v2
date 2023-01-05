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
                <a href="opciones.php">Realizar</a>
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
                <a href="nuevaVenta.php">Nueva venta</a>
                <a href="cancelarVenta.php">Cancelar venta</a>
                <a href="corteDia.php">Corte del dia</a>
                <a href="compraProv.php">Compra al proveedor</a>
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
            <h3>Realizar Ajuste</h3>
            <!-- Boton de busqueda y tabla  -->
            <div class="folio">
                <section class="buscarF">
                    <form action="\inserts\insertarAJ.php" method="POST">
                        <h4>Selecciona el motivo y el producto <br>(Únicamente 1 de cada 1)</h4>
                        <div class="motivo">
                            <h5>CV<input type="checkbox" name="cv"></h5>
                            <h5>Cambio Sabor<input type="checkbox" name="cs"></h5>
                            <h5>Consumo Empleados<input type="checkbox" name="ci"></h5>
                            <h5>Dante<input type="checkbox" name="da"></h5>
                            <h5>Deshojados/Desbaratado<input type="checkbox" name="dd"></h5>
                            <h5>Devolución Fábrica<input type="checkbox" name="df"></h5>
                            <h5>Faltantes<input type="checkbox" name="fa"></h5>
                            <h5>Faltante/Sobrantes<input type="checkbox" name="fs"></h5>
                            <h5>Gil/Jos<input type="checkbox" name="gj"></h5>
                            <h5>Producto Caduco<input type="checkbox" name="pc"></h5>
                            <h5>Traspaso<input type="checkbox" name="tr"></h5>
                            <h5>Xicoli<input type="checkbox" name="xi"></h5>
                            <br>
                            <!--  -->
                            <!-- <section>

                                <label for="puerco_rojo">Puerco Rojo:</label><input type="checkbox" name=puercoR>
                                <label for="e_puerco_rojo">Entrada:</label><input type="number" name="ePR">
                                <label for="s_puerco_rojo">Salida:</label><input type="number" name="sPR"><pr>

                                <label for="puerco_verde">Puerco Verve:</label><input type="checkbox" name=puercoV>
                                <label for="e_puerco_verde">Entrada:</label><input type="number" name="ePV">
                                <label for="s_puerco_verde">Salida:</label><input type="number" name="sPV">
                                <p>
                                <label for="puerco_rojo">Puerco Rojo:</label><input type="checkbox" name=puercoR>
                                <label for="e_puerco_rojo">Entrada:</label><input type="number" name="ePR">
                                <label for="s_puerco_rojo">Salida:</label><input type="number" name="sPR">
                                <p>
                                <label for="puerco_rojo">Puerco Rojo:</label><input type="checkbox" name=puercoR>
                                <label for="e_puerco_rojo">Entrada:</label><input type="number" name="ePR">
                                <label for="s_puerco_rojo">Salida:</label><input type="number" name="sPR">
                                <p>
                                <label for="puerco_rojo">Puerco Rojo:</label><input type="checkbox" name=puercoR>
                                <label for="e_puerco_rojo">Entrada:</label><input type="number" name="ePR">
                                <label for="s_puerco_rojo">Salida:</label><input type="number" name="sPR">
                                <p>
                                <label for="puerco_rojo">Puerco Rojo:</label><input type="checkbox" name=puercoR>
                                <label for="e_puerco_rojo">Entrada:</label><input type="number" name="ePR">
                                <label for="s_puerco_rojo">Salida:</label><input type="number" name="sPR">
                                <p>
                                <label for="puerco_rojo">Puerco Rojo:</label><input type="checkbox" name=puercoR>
                                <label for="e_puerco_rojo">Entrada:</label><input type="number" name="ePR">
                                <label for="s_puerco_rojo">Salida:</label><input type="number" name="sPR">
                                <p>
                                <label for="puerco_rojo">Puerco Rojo:</label><input type="checkbox" name=puercoR>
                                <label for="e_puerco_rojo">Entrada:</label><input type="number" name="ePR">
                                <label for="s_puerco_rojo">Salida:</label><input type="number" name="sPR">
                                <p>
                                <label for="puerco_rojo">Puerco Rojo:</label><input type="checkbox" name=puercoR>
                                <label for="e_puerco_rojo">Entrada:</label><input type="number" name="ePR">
                                <label for="s_puerco_rojo">Salida:</label><input type="number" name="sPR">
                                <p>
                                <label for="puerco_rojo">Puerco Rojo:</label><input type="checkbox" name=puercoR>
                                <label for="e_puerco_rojo">Entrada:</label><input type="number" name="ePR">
                                <label for="s_puerco_rojo">Salida:</label><input type="number" name="sPR">
                            </section> -->
                            <!-- Tabla de informacion -->
                            <section class="tProductos">
                                <table id="productTable">
                                    <thead>
                                        <tr>
                                            <th>Productos</th>
                                            <th>Cantidad</th>
                                        </tr>
                                        <tr>
                                            <td>Puerco c/chile Rojo</td>
                                            <td><input type="number"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Puerco c/chile Verde</td>
                                            <td><input type="number"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Rajas c/queso</td>
                                            <td><input type="number"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Pollo c/aceitunas</td>
                                            <td><input type="number"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Pollo c/chile Rojo</td>
                                            <td><input type="number"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Pollo c/chile Verde</td>
                                            <td><input type="number"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Dulce c/pasas y Nuez</td>
                                            <td><input type="number"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Dulce c/piña</td>
                                            <td><input type="number"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Cereza c/almendra</td>
                                            <td><input type="number"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Vaso champurrado</td>
                                            <td><input type="number"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Medio litro champurrado</td>
                                            <td><input type="number"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Litro champurrado</td>
                                            <td><input type="number"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Vaso atole piña</td>
                                            <td><input type="number"></input></td>
                                        </tr>
                                    </thead>
                                </table>
                            </section>
                        <!-- Botón para capturar -->
                        </div>
                        <button type="submit" id="confirmBtn" value="Capturar">Confirmar</button>
                    </form>
                </section>
            </div>
        </div>
    </main>
    <footer class="mainfooter">
        <h3>Copyright © 2022, Tamales Fiesta Mexicana</h3>
    </footer>
    <script src="https://kit.fontawesome.com/2d73307e5c.js" crossorigin="anonymous"></script>
    <!-- Inicio de sesion y menu principal -->
    <script src="js/menuIndex.js" type="text/javascript"></script> 
</body>
</html>