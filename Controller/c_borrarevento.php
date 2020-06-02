<?php
include_once "../Model/m_Evento.php";

//obtenemos el evento
$evento = m_Evento::obtenerEvento($_POST['idparaeliminar']);

//eliminamos la imagen del evento en el servidor
unlink("../View/images/eventos/".$evento->getImagen());

//hacemos el delete y redireccionamos al panel de eventos
$evento->delete();
header("Location: c_inicioorganizador.php");

?>