<?php
session_start();
//Se comprueba el tipo de usuario que ha iniciado sesión y se le dirige a su pantalla de inicio correspondiente
if($_SESSION['tipo']=="organizador"){
    include_once "../Model/m_organizador.php";

    $usuario = m_Organizador::obtenerOrganizador($_SESSION['usuariomtp']);
    $usuario->delete();

    header("Location: c_login.php");
}
else {
    include_once "../Model/m_Usuario.php";

    $usuario = m_Usuario::obtenerUsuario($_SESSION['usuariomtp']);
    $usuario->delete();

    header("Location: c_login.php");
}
?>