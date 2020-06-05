<?php
session_start();
//Se comprueba si se ha completado el formulario de registro para mostrarlo, o ejecutar la inserción.
if(!isset($_POST['nombre'])){

    if(isset($_REQUEST['error'])){
        $error = "El usuario introducido ya existe.";
    }

    else {
        $error = "";
    }
    
    include_once "../View/v_registro.php";
}
else {
    $error = "";
    //Se mira si ha recibido la fecha de nacimiento para ver si se quiere registrar un tipo usuario u organizador, y se hacen los insert.
    if(isset($_POST['fechanac'])){
        include_once "../Model/m_Usuario.php";

        if(m_Usuario::obtenerUsuario($_POST['usuario'])==0){
            $usuario = new m_Usuario($_POST['usuario'],password_hash($_POST['clave'],PASSWORD_DEFAULT),$_POST['nombre'],$_POST['apellidos'],$_POST['fechanac'],"");
            $usuario->insert();
            $_SESSION['usuariomtp'] = $_POST['usuario'];
            $_SESSION['clavemtp'] = $_POST['clave'];
            header("Location: c_postregistro.php?name=".$_POST['nombre']."");
        }

        else {
            header("Location: c_registro.php?error=repetido");
        }

        
    }

    else {      
        include_once "../Model/m_Organizador.php";
        $organizador = new m_Organizador($_POST['usuario'],password_hash($_POST['clave'],PASSWORD_DEFAULT),$_POST['nombre'],$_POST['apellidos'],$_POST['empresa']);
        $organizador->insert();
        $_SESSION['usuariomtp'] = $_POST['usuario'];
        $_SESSION['clavemtp'] = $_POST['clave'];
        header("Location: c_postregistro.php?name=".$_POST['nombre']."");     
    }
}
?>