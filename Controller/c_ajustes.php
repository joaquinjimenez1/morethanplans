<?php
session_start();
//Se comprueba el tipo de usuario que ha iniciado sesión y se le dirige a su pantalla de ajuste correspondiente
if($_SESSION['tipo']=="organizador"){
    header("Location: c_ajustescuentaorganizador.php");
}
else {
    header("Location: c_ajustescuentausuario.php");
}
?>