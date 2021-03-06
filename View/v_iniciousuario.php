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
    <link rel="stylesheet" type="text/css" href="../View/css/eventos.css">
    <link rel="stylesheet" type="text/css" href="../View/css/cookie.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>>PLANS</title>
</head>
<!-- HEADER -->
<body>
<div class="wrapper">
  <nav class="navbar navbar-custom justify-content-between">
    <a class="navbar-brand" href="../Controller/c_inicio.php">
      <img src="../View/images/logo.png" height="30">
    </a>
    <form class="form-inline">
    <a class="botonSalir" href="../Controller/c_ayuda.php">Ayuda</a>
    <a class="botonSalir" href="../Controller/c_ajustes.php">Mi cuenta</a>
    <a href="../Controller/c_cerrarSesion.php" class="botonPlan">Salir</a>
    </form>
  </nav>
  <!-- FIN HEADER -->
  <!-- CONTENIDO -->
  <div class="contenido row">
    <div id="customplan" class="col-xl-6">
    <h2>Asistente de planes</h2>
    <div id="chat">
    </div>
    <input id="textochat" class="inputLogin" type="text" value=""><a id="botonchat" class="btn btn-light">ENVIAR</a>
    </div>
    <div id="segunintereses" class="col-xl-6">
    <h2>Eventos que te han gustado</h2>
    <?=m_Evento::pintarEventosLikeLimitados($_SESSION['usuariomtp']);?>
    <a class="btn btn-light" href="c_eventoslike.php">Ver todos</a>
    </div>
  <div class="contenido row mostrarTodo">
  </div><div class="col-xl-12"><br>
  <div class="jumbotron">
    <h1 class="jumbo">Descubre con nosotros</h1>
    <p class="jumbo">Quizás ahora tienes muy claros tus planes preferidos, pero nunca viene mal abrir la mente y probar cosas nuevas.</p>
  </div>
  <?=m_Evento::pintarTodosEventosLimitados();?>
  <a class="botonLogin" data-toggle="collapse" href="#mostrarmas" role="button" aria-expanded="false" aria-controls="collapseExample">Ver más planes</a>
<div id="mostrarmas" class="collapse">
  <?=m_Evento::pintarTodosEventos();?>
    </div>
  </div></div></div>
  <!-- FIN CONTENIDO -->
  <!-- PIE -->
  <footer class="pie row">
    <!-- PIE COLUMNA 1 -->
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
    <!-- PIE COLUMNA 2 -->
    <div id="enlaces" class="col-xl-6"><br>
    <a class="navbar-brand" href="../Controller/c_ajustes.php">Mi cuenta</a><br>
    <a class="navbar-brand" href="../Controller/c_ayuda.php">Ayuda</a><br>
    </div>
    <input class="checkbox-cb" id="checkbox-cb" type="checkbox" />
    <?php
    if($_REQUEST['primera']){
      echo "<div class='cookie-bar'>
      <span class='message'>Nuestro sitio utiliza cookies.</span>
      <label for='checkbox-cb' class='close-cb'>X</label>
      </div>";
    }
    ?>
</div>
</footer>
<!-- FIN PIE -->
   <script src="../View/js/eventos.js" type="text/javascript"></script>
   <script src="../View/js/chat.js" type="text/javascript"></script>
   <script src="../View/js/popper.min.js" type="text/javascript"></script>
   <script src="../View/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="../View/js/bootstrap.bundle.min.js" type="text/javascript"></script>
   <script src="../View/js/jquery-3.4.1.min.js" type="text/jquery-3"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
