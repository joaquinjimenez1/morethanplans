<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>>PLANS</title>
<link rel="stylesheet" type="text/css" href="../View/css/postregistro.css">
<link rel="stylesheet" href="../View/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../View/css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="../View/css/bootstrap-reboot.min.css" type="text/css">
</head>
<body>
    <div id="cabecera">
        <video autoplay muted loop playsinline>
            <source src="../View/images/videointro.mp4" type="video/mp4">
        </video>
    
    </div>
    <div id="contenido">
    <?php echo "<h1>¡Hola ".$_REQUEST['name']."!</h1>"?>
    <p>Desde hoy estarás rodeado de eventos y personas increíbles.</p>

        <br><a href="c_login.php" class="botonContinuar">ENTRAR</a>
    </div>
    
   <script src="../View/js/popper.min.js" type="text/javascript"></script>
   <script src="../View/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="../View/js/bootstrap.bundle.min.js" type="text/javascript"></script>
   <script src="../View/js/jquery-3.4.1.min.js" type="text/jquery-3"></script>
</body>
</html>