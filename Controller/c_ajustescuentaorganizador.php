<?php
session_start();
include_once "../Model/m_Organizador.php";
//Se comprueban las credenciales
if(isset($_SESSION['usuariomtp'])){
    if(m_Cuenta::compruebaCredenciales($_SESSION['usuariomtp'],$_SESSION['clavemtp'])){
        if(!isset($_POST['nombre'])){
            $usuario = m_Organizador::obtenerOrganizador($_SESSION['usuariomtp']);
            include "../View/v_ajustescuentaorganizador.php";
        }
        else {
            include "../View/v_ajustescuentaorganizador.php";
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