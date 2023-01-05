<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administrador | Inicio sesión</title>
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
                <a href="salirUAdm.php">Página de usuario</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
            </div>
        </div>
        </nav>
        <header id="header">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Iniciar sesión</h1>
            </div>
            </div>
        </div>
        </header>
        <section id="main">
        <div class="container">
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form id="login" action="validarAdm.php" class="well" method="post" name="adminForm"> 
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" class="form-control" placeholder="Tu usuario" name="userNmeAdm">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" placeholder="Tu contraseña" name="userPssAdm">
                    </div>
                    <button type="submit" class="btn btn-default btn-block">Ingresar</button>
                </form>
            </div>
            </div>
        </div>
        </section>
        <footer id="footer">
        <p>Copyright © 2022, Tamales Fiesta Mexicana</p>
        </footer>
    <script>
        CKEDITOR.replace("editor1");
    </script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>