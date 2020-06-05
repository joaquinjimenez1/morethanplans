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
    <a class="botonSalir" href="#">Ayuda</a>
    <a class="botonSalir" href="../Controller/c_ajustes.php">Mi cuenta</a>
    <a href="../Controller/c_cerrarSesion.php" class="botonPlan">Salir</a>
    </form>
  </nav>
  <!-- FIN HEADER -->
  <!-- CONTENIDO -->
  <div class="contenido row justify-content-center">
    <div id="customplan" class="col-xl-6">
    <h2>Editando  <?=$evento->getTitulo();?></h2>
    <form name="form2" action="c_updateevento.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                    <br><h6 class="ayuda">TITULO</h6>
                        <input type="hidden" name="codigo" value="<?=$evento->getCodigo();?>">
                        <input required type="text" name="titulo" class="inputLogin" value="<?=$evento->getTitulo();?>">
                    </div>
                    <div class="form-group">
                    <h6 class="ayuda">DESCRIPCIÓN</h6>
                        <input required type="text" name="descripcion" class="inputLogin" value="<?=$evento->getDescripcion();?>">
                    </div>
                    <div class="form-group">
                    <h6 class="ayuda">IMAGEN</h6>
                        <input type="file" name="imagen" accept="image/*" id="imagen" class="form-control-file">
                        <input type="hidden" name="imagenAnterior" value="<?=$evento->getImagen();?>">
                    </div>
                    <div class="form-group">
                    <h6 class="ayuda">LUGAR</h6>
                        <input required type="text" name="lugar" class="inputLogin" value="<?=$evento->getLugar();?>">
                    </div>
                    <div class="form-group">
                    <h6 class="ayuda">FECHA</h6>
                        <input required type="date" name="fecha" class="inputLogin" value="<?=$fecha;?>">
                    </div>
                    <div class="form-group">
                    <h6 class="ayuda">HORA</h6>
                        <input required type="time" name="hora" class="inputLogin" value="<?=$hora;?>">
                    </div>
                    <div class="form-group">
                    <h6 class="ayuda">SELECCIONA ETIQUETAS RELACIONADAS CON EL EVENTO</h6>
                    
                    <?php
                      if(in_array("fiesta",$etiquetas)){
                        
                        echo "<label><input type='checkbox' name='fiesta' class='option-input checkbox' checked/>Fiesta</label>";
                      }

                      else {
                        echo "<label><input type='checkbox' name='fiesta' class='option-input checkbox'/>Fiesta</label>";
                      }

                      if(in_array("chilling",$etiquetas)){
                        echo "<label><input type='checkbox' name='chilling' class='option-input checkbox' checked/>Chilling</label>";
                      }

                      else {
                        echo "<label><input type='checkbox' name='chilling' class='option-input checkbox'/>Chilling</label>";
                      }

                      if(in_array("amor",$etiquetas)){
                        echo "<label><input type='checkbox' name='amor' class='option-input checkbox' checked/>Amor</label>";
                      }

                      else {
                        echo "<label><input type='checkbox' name='amor' class='option-input checkbox'/>Amor</label>";
                      }

                      if(in_array("comida",$etiquetas)){
                        echo "<label><input type='checkbox' name='comida' class='option-input checkbox' checked/>Comida</label>";
                      }

                      else {
                        echo "<label><input type='checkbox' name='comida' class='option-input checkbox'/>Comida</label>";
                      }

                      if(in_array("concierto",$etiquetas)){
                        echo "<label><input type='checkbox' name='concierto' class='option-input checkbox' checked/>Concierto</label>";
                      }

                      else {
                        echo "<label><input type='checkbox' name='concierto' class='option-input checkbox'/>Concierto</label>";
                      }
                    ?>
          
                    </div>
                    <div class="row justify-content-center">
                    <input type="submit" id="enviar" class="btn btn-warning" value="ACTUALIZAR">&nbsp;
                    <a href="../Controller/c_inicioorganizador.php" class="btn btn-danger">VOLVER</a>
                    </div>
                </form>
    </div>
  </div>
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
