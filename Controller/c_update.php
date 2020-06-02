<?php
session_start();

    //Se mira si ha recibido la fecha de nacimiento para ver si se quiere registrar un tipo usuario u organizador, y se hacen los update.
    if(isset($_POST['fechanac'])){
        include_once "../Model/m_Usuario.php";
        $usuario = new m_Usuario($_SESSION['usuariomtp'],password_hash($_POST['clave'],PASSWORD_DEFAULT),$_POST['nombre'],$_POST['apellidos'],$_POST['fechanac'],$_POST['gustos']);
        $usuario->update();
        $_SESSION['clavemtp'] = $_POST['clave'];
        header("Location: c_inicioUsuario.php");
    }

    else {      
        include_once "../Model/m_Organizador.php";
        $organizador = new m_Organizador($_SESSION['usuariomtp'],password_hash($_POST['clave'],PASSWORD_DEFAULT),$_POST['nombre'],$_POST['apellidos'],$_POST['empresa']);
        $organizador->update();
        $_SESSION['clavemtp'] = $_POST['clave'];
        header("Location: c_inicioOrganizador.php");   
    }

?>