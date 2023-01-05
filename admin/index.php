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
        <title>Administrador</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
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
                <li class="active"><a href="index.php">Inicio</a></li>
                <li><a href="pages.php">Tablas</a></li>
                <li><a href="tablas/usuarios.php">Usuarios</a></li>
                <li><a href="salirUAdm.php">Página de usuario</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="SalirA.php">Cerrar sesión</a></li>
            </ul>
            </div><!--/.nav-collapse -->
        </div>
        </nav>

        <header id="header">
        <div class="container">
            <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Inicio<br><small>Administrador de contenidos de "Fiesta Mexicana"</small></h1>
            </div>
            <div class="col-md-2">
                <div class="dropdown create">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Crear
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a type="button" data-toggle="modal" data-target="#addUser">Agregar Usuario</a></li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        </header>

        <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
            <li class="active">Inicio</li>
            </ol>
        </div>
        </section>

        <section id="main">
        <div class="container">
            <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                <a href="index.php" class="list-group-item active main-color-bg">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Inicio
                </a>
                <a href="pages.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Tablas</span></a>
                <a href="tablas/usuarios.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios</span></a>
                </div>

                
            </div>
            <div class="col-md-9">
            </div>
            </div>
        </div>
        </section>

        <footer id="footer">
        <p>Copyright © 2022, Tamales Fiesta Mexicana</p>
        </footer>

        <!-- Modals -->
        
        <section class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form action="agregarUs.php" method="POST">
            <section class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Agregar Usuario</h4>
            </section>
            <div class="modal-body">
                <section class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
                </section>
                <section class="form-group">
                <label for="contraseña">Contraseña</label>
                <input type="password" class="form-control" name="contraseña">
                </section>
                <section class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control" name="tipo">
                </section>
                <section class="checkbox">
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" name="submit">Guardar cambios</button>
            </div>
            </form>
            </div>
        </div>
        </section>

    <script>CKEDITOR.replace("editor1");</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>