<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/icono.svg">
    <link rel="stylesheet" href="../View/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../View/css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="../View/css/bootstrap-reboot.min.css" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../View/css/general.css">
    <link rel="stylesheet" type="text/css" href="../View/css/cabecerafooter.css">
    <link rel="stylesheet" type="text/css" href="../View/css/login.css">
    <link rel="stylesheet" type="text/css" href="../View/css/cookie.css">
    <title>>PLANS</title>
</head>
<!-- HEADER -->
<body>
<div class="wrapper">
  <nav class="navbar navbar-custom justify-content-between">
    <a class="navbar-brand" href="../Controller/c_inicioorganizador.php">
      <img src="../View/images/logo.png" height="30">
    </a>
    <form class="form-inline">
    <a class="botonSalir" href="#">Ayuda</a>
    <a class="botonSalir" href="../Controller/c_ajustes.php">Mi cuenta</a>
    <a href="../Controller/c_cerrarSesion.php" class="botonPlan">Salir</a>
    </form>
  </nav>
<!-- FIN HEADER -->
<!-- CONTENIDO -->
<div id="container">
  <div class="row justify-content-center">
            <div class="col-md-4" id="formularioLogin">
                <h2 class="titulo">MI CUENTA</h2><br><h6>¿Algún error en el registro, o una modificación de última hora? No te preocupes, puedes cambiar aquí los datos de tu cuenta.<br><br>Modifica los datos que quieras y haz click en actualizar.</h6>
                <form action="c_update.php" method="post">
                    <div class="form-group">
                    <br><h6 class="ayuda">NOMBRE</h6>
                        <input required type="text" name="nombre" class="inputLogin" value="<?php echo $usuario->getNombre();?>">
                    </div>
                    <div class="form-group">
                    <h6 class="ayuda">APELLIDOS</h6>
                        <input required type="text" name="apellidos" class="inputLogin" value="<?php echo $usuario->getApellidos();?>">
                    </div>
                    <div class="form-group">
                    <h6 class="ayuda">EMPRESA</h6>
                        <input required type="text" name="empresa" class="inputLogin" value="<?php echo $usuario->getEmpresa();?>">
                    </div>
                    <h6 class="ayuda">Introduce tu contraseña antigua, o una nueva si quieres.</h6>
                    <div class="form-group">
                        <input required id="clave1" type="password" class="inputLogin" placeholder="INTRODUCE UNA CONTRASEÑA">
                    </div>
                    <div class="form-group">
                        <input required  name="clave" id="clave2" type="password" class="inputLogin" placeholder="REPITA LA CONTRASEÑA">
                    </div><br><br>
                    <div class="row justify-content-center">
                    <a class="btn btn-secondary"" href="../Controller/c_borrarCuenta.php">Borrar cuenta</a><br>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                    <input type="submit" id="enviar" class="botonLogin" value="ACTUALIZAR DATOS">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FIN CONTENIDO -->
<!-- PIE -->
  <footer class="pie row">
  <!-- COLUMNA 1 PIE -->
    <div id="informacion" class="col-xl-6">
    <p id="infopie"><br>MORETHANPLANS es una plataforma que une gente que busca planes, con los lugares y eventos perfectos para ellos.</p>
    <div class="social">
    <ul>
        <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-youtube"></i></a></li>
    </ul>
  </div></div>
  <!-- COLUMNA 2 PIE -->
    <div id="enlaces" class="col-xl-6"><br>
    <a class="navbar-brand" href="../Controller/c_ajustes.php">Mi cuenta</a><br>
    <a class="navbar-brand" href="#">Ayuda</a><br>
    <a href="../Controller/c_cerrarSesion.php" class="navbar-brand">Salir</a>
    </div>
    <input class="checkbox-cb" id="checkbox-cb" type="checkbox" />
</div>
</footer>
<!-- FIN PIE -->
   <script src="../View/js/popper.min.js" type="text/javascript"></script>
   <script src="../View/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="../View/js/bootstrap.bundle.min.js" type="text/javascript"></script>
   <script src="../View/js/jquery-3.4.1.min.js" type="text/jquery-3"></script>
    
</body>
</html>
