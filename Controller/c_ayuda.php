<?php
session_start();
//Se comprueba el tipo de usuario que ha iniciado sesión y se le dirige a su pantalla de ayuda correspondiente

    if($_SESSION['tipo']=="organizador"){
        include "../View/v_ayudaorganizador.php";
    }
    else {
        include "../View/v_ayudausuario.php";
    }


?>