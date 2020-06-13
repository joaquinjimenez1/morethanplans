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
    <a class="navbar-brand" href="../Controller/c_inicio.php">
      <img src="../View/images/logo.png"height="30">
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
<h2>Ayuda de organizador</h2>
<h5>Los usuarios organizadores son los que crean y administran planes.</h5>
<br><h3>Pantalla de inicio</h3><br>
<img class="img-fluid" src="../View/images/inicioorganizador.png"><br>
<ul>
<li>1. Logo principal, el cual sirve para volver a la página de inicio en cualquier momento de nuestra experiencia.</li>
<li>2. Menú principal, donde encontramos:
  <ul>
    <li>1. Ayuda: Muestra un manual de usuario.</li>
    <li>2. Mi cuenta: Ajustes de la cuenta como modificar datos del usuario o borrar la cuenta.</li>
    <li>3. Salir: Cierra la sesión y vuelve a la pantalla de login.</li>
  </ul>
</li>
<li>3. Últimas creaciones: aparecerán los eventos que hemos creado.</li>
<li>4. Formulario para crear y subir un nuevo plan.</li>
<li>5. Botones para eliminar o editar los datos de un evento.</li>
<li>6. Zona social donde tenemos los enlaces a las redes sociales de morethanplans.</li>
<li>7. Menú secundario con la misma funcionalidad que el mostrado en la zona superior.</li>
</ul>
</div><a class="btn btn-light" href="c_inicio.php">Volver</a></div>
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
