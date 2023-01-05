<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login "Tamales Fiesta Mexicana"</title>
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
</head>
<body>
    <section class="contenido">
    <!-- Area del Form de inicio -->
        <div class="cont-sesion">
        <section class="animacion-sesion">
            <!-- Form -->
            <div class="inicio-sesion-form" >
                <form action="validar.php" method="post" name="form">
                    <h2 class="title">Iniciar sesión</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuario" name="user_name" id="usuario"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" name="user_password" id="contraseña"/>
                    </div>
                    <!-- Boton -->
                    <input type="submit" value="Ingresar" id="btn1"/>
                </form>
                <div class="btn1class">
                    <button onclick="window.location.href='admin/login.php'" id="btn1">Administrador</button>
                </div>
            </div>
            
        </section>
        </div>
        <!-- Panel verde izquierdo -->
        <section class="panel-contenedor">
        <div class="panel izquierdo">
            <!-- Logo de la empresa -->
            <img src="img/general/logo2.png" class="image" alt="" />
            <img src="img/general/logo2.png" class="imagetop" alt="" />
        </div>
        </section>
    </section>
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/2d73307e5c.js" crossorigin="anonymous"></script><script src="js/menuIndex.js" type="text/javascript"></script>
</body>
</html>