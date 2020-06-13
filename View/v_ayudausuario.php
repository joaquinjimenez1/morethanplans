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
<h2>Ayuda de usuario</h2>
<h5>El perfil de usuario pertenece al grupo de personas que busca planes en nuestra plataforma, sin posibilidad de crear o modificar planes.</h5>
<br><h3>Pantalla de inicio</h3><br>
<img class="img-fluid" src="../View/images/iniciousuario.png"><br>
<ul>
<li>1. Logo principal, el cual sirve para volver a la página de inicio en cualquier momento de nuestra experiencia.</li>
<li>2. Menú principal, donde encontramos:
  <ul>
    <li>1. Ayuda: Muestra un manual de usuario.</li>
    <li>2. Mi cuenta: Ajustes de la cuenta como modificar datos del usuario o borrar la cuenta.</li>
    <li>3. Salir: Cierra la sesión y vuelve a la pantalla de login.</li>
  </ul>
</li>
<li>3. Asistente de planes: Un pequeño chat con una asistente virtual que te ayudará a encontrar tus planes perfectos con algunas preguntas.</li>
<li>4. Eventos que te han gustado: En esta sección aparecerán todos los eventos que hayamos marcado con favoritos.</li>
<li>5. Ver todos nos llevará a una página en la que veremos todos los eventos marcados como favoritos.</li>
<li>6. Descubre con nosotros es una sección en la que aparecerán planes recomendados.</li>
<li>7. Ver más planes nos llevará a una página en la que veremos una lista mayor de planes.</li>
<li>8. Zona social donde tenemos los enlaces a las redes sociales de morethanplans.</li>
<li>9. Menú secundario con la misma funcionalidad que el mostrado en la zona superior.</li>
</ul>
<br><h3>Tarjeta de plan</h3><br>
<img class="img-fluid" src="../View/images/tarjetaplan.png"><br>
<li>1. Título</li>
<li>2. Fecha, hora y lugar</li>
<li>3. Descripción</li>
<li>4. Organizador del evento con enlace a ver más eventos organizados por el mismo.</li>
<li>5. Botón like con el que guardar eventos que te gustan.</li>
<li>6. Imagen del evento.</li>
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
