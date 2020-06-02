<?php
session_start();
//Se comprueba el tipo de usuario que ha iniciado sesión y se le dirige a su pantalla de inicio correspondiente
if($_SESSION['tipo']=="organizador"){
    header("Location: c_inicioorganizador.php?primera=1");
}
else {
    header("Location: c_iniciousuario.php?primera=1");
}
?>