<?php
include_once "../Model/m_Usuario.php";

//al hacer click en un boton love, se hace un update de los gustos del usuario
//añadiendo el código del evento a sus gustos en la base de datos

    $usuario = m_Usuario::obtenerUsuario($_SESSION['usuariomtp']);
    $usuario->setGustos($_REQUEST['idparainsertar']);
    $usuario->update();

?>