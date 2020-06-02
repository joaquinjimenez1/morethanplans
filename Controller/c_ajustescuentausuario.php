<?php
session_start();
include_once "../Model/m_Usuario.php";
//Se comprueban las credenciales
if(isset($_SESSION['usuariomtp'])){
    if(m_Cuenta::compruebaCredenciales($_SESSION['usuariomtp'],$_SESSION['clavemtp'])){      
        if(!isset($_POST['nombre'])){
            $usuario = m_Usuario::obtenerUsuario($_SESSION['usuariomtp']);
            include "../View/v_ajustescuentausuario.php";
        }
        else {
            include "../View/v_ajustescuentausuario.php";
        }
    }
    else {
        $error = "Los datos de acceso que tenías en tu dispositivo ya no son correctos.";
        include "../View/v_login.php";
    }
}
else {
    $error = "";
    include "../View/v_login.php";
}
?>