<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/icono.svg">
    <link rel="stylesheet" href="../View/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../View/css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="../View/css/bootstrap-reboot.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../View/css/login.css">
    <title>>PLANS</title>
</head>
<body>
    <div id="container">
            <div class="cabeceraLogin">
            <a href="../Controller/c_inicio.php"><img src="../View/images/logo.png"></a>
            </div>
            <div class="row justify-content-center">
            <div class="col-md-4" id="formularioLogin">
            <h4><?php echo $error; ?></h4><br>
            <h2>Necesitamos conocerte más para planear juntos.<br><br></h2>
                <form action="c_registro.php" method="post">
                    <label>Algunos datos sobre tí...</label>
                    <div class="form-group">
                        <input required type="text" name="nombre" class="inputLogin" placeholder="NOMBRE">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="apellidos" class="inputLogin" placeholder="APELLIDOS">
                    </div>
                    <div class="custom-control custom-switch">
                    <input type="checkbox" name="tipo" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Quiero una cuenta de organizador.*</label>
                    <br><small>Los organizadores pueden crear y gestionar eventos.</small>
                    </div><br>
                    <div id="opcional">
                    <label>Fecha de nacimiento (mantendremos el secreto)</label>
                    <div class='form-group'>
                    <input required type='date' name='fechanac' class='inputLogin' placeholder='FECHA DE NACIMIENTO'>
                    </div>
                    </div>
                    <br>
                    <label>Por último, introduce los datos que quieras para acceder.</label>
                    <div class="form-group">
                        <input required type="text" name="usuario" class="inputLogin" placeholder="USUARIO">
                    </div>
                    <div class="form-group">
                        <input required id="clave1" type="password" class="inputLogin" placeholder="CONTRASEÑA">
                    </div>
                    <div class="form-group">
                        <input required  name="clave" id="clave2" type="password" class="inputLogin" placeholder="REPITA LA CONTRASEÑA">
                    </div>
                    <br>
                    <div class="row justify-content-center">
                    <input type="submit" id="enviar" class="botonLogin" value="REGISTRARSE">
                    </div>

                </form>
            </div>
        </div>
    </div>
   <script src="../View/js/validapasswords.js" type="text/javascript"></script>
   <script src="../View/js/modoorganizador.js" type="text/javascript"></script>
   <script src="../View/js/popper.min.js" type="text/javascript"></script>
   <script src="../View/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="../View/js/bootstrap.bundle.min.js" type="text/javascript"></script>
   <script src="../View/js/jquery-3.4.1.min.js" type="text/jquery-3"></script>
    
</body>
</html>
