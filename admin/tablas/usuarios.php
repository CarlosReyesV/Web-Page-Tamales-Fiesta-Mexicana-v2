<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administrador | Editar tabla</title>
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/estilosTablas.css">
    </head>
    <body>

        <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Administrador de contenidos de "Fiesta Mexicana"</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Inicio</a></li>
                <li class="active"><a href="../pages.php">Tablas</a></li>
                <li><a href="../users.php">Usuarios</a></li>
                <li><a href="../salirUAdm.php">Página de usuario</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../SalirA.php">Cerrar sesión</a></li>
            </ul>
            </div>
        </div>
        </nav>

        <header id="header">
        <div class="container">
            <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Editar Tabla<small>Administrador de contenidos de "Fiesta Mexicana"</small></h1>
            </div>
            
            </div>
        </div>
        </header>

        <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../pages.php">Tablas</a></li>
            <li class="active">Editar Tabla</li>
            </ol>
        </div>
        </section>

        <section id="main">
        <div class="container">
            <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                <a href="../index.php" class="list-group-item active main-color-bg">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Inicio
                </a>
                <a href="../pages.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Tablas </span></a>
                <a href="../users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios </span></a>
                </div>

                <!-- Contenido Oculto -->
                <div class="well" style="display: none">
                <h4>Disk Space Used</h4>
                <div class="progress" >
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        60%
                </div>
                </div>
                <h4>Bandwidth Used </h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                        40%
                    </div>
                </div>
        
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                    <h3 class="panel-title">Editar Tabla</h3>
                </div>
                <div class="panel-body">
                    <form>
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" placeholder="Page Title" value="Usuarios">
                    </div>
                    <section class="tProductos" style="width:auto; min-width:none">
                        <?php
                        include("userAdmin.php");
                        ?>
                    </section>
                    </form>
                    <button><a type="button" href="../insertar/insertarUs.php">Agregar datos</a></button>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

        <footer id="footer">
        <p>Copyright © 2022, Tamales Fiesta Mexicana</p>
        </footer>

    <script>CKEDITOR.replace( "editor1" );</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Funciones de las tablas -->
    <script async src="/js/tabla.js"></script>
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
    </body>
</html>