<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../View/images/icono.svg">
    <link rel="stylesheet" href="../View/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../View/css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="../View/css/bootstrap-reboot.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../View/css/login.css">
    <title>>PLANS</title>
</head>
<body>
    <div id="container">
            <div class="cabeceraLogin">
                <img src="../View/images/logo.png">
            </div>
            <div class="row justify-content-center">
            <div class="col-md-4" id="formularioLogin">
                <h4><?php echo $error; ?></h4><br>
                <form action="c_login.php" method="post">
                    <div class="form-group">
                        <input required type="text" name="usuario" class="inputLogin" placeholder="USUARIO">
                    </div>
                    <div class="form-group">
                        <input required type="password" name="clave" class="inputLogin" placeholder="CONTRASEÑA">
                    </div>
                    <br>
                    <div class="row justify-content-center">
                    <input type="submit" id="enviar" class="botonLogin" value="ENTRAR"><a href="c_registro.php" class="botonRegistro">REGISTRARSE</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    




   <script src="../View/js/popper.min.js" type="text/javascript"></script>
   <script src="../View/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="../View/js/bootstrap.bundle.min.js" type="text/javascript"></script>
   <script src="../View/js/jquery-3.4.1.min.js" type="text/jquery-3"></script>
    
</body>
</html>
