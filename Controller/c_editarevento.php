<?php
include_once "../Model/m_Evento.php";

//obtenemos el evento
$evento = m_Evento::obtenerEvento($_POST['idparaeditar']);

//separamos la fecha y la hora del datetime de la base de datos para mostrarla en inputs diferentes
$fecha = substr($evento->getFecha(),0,10);
$hora = substr($evento->getFecha(),11,9);

//obtenemos el array de etiquetas que tenemos
$etiquetas = $evento->getEtiquetas();

include "../View/v_editaevento.php";




?>