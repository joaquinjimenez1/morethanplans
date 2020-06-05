<?php
session_start();
include_once "../Model/m_Cuenta.php";
//Si se viene desde la página de login, se comprueban las credenciales
if(isset($_POST['usuario'])){
    if(m_Cuenta::compruebaCredenciales($_POST['usuario'],$_POST['clave'])){

        $_SESSION['usuariomtp']=$_POST['usuario'];
        $_SESSION['clavemtp']=$_POST['clave'];

        header("Location: c_inicio.php");
    }
    else {
        $error = "Ohh... esos datos no son correctos para iniciar sesión.";
        include "../View/v_login.php";
    }
}
//Si no, se mira si existe una sesión abierta con unas credenciales válidas.
else {

    if(isset($_SESSION['usuariomtp'])){
        if(m_Cuenta::compruebaCredenciales($_SESSION['usuariomtp'],$_SESSION['clavemtp'])){
    
            header("Location: c_inicio.php");
        }
        else {
            $error = "";
            include "../View/v_login.php";
        }
    }
    else {

            $error = "";

        include "../View/v_login.php";
    }
}


?>