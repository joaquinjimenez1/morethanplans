<?php

include_once "../Model/m_Evento.php";
session_start();

//se crea un array etiquetas que se rellenará con las marcadas en el formulario
$etiquetas = [];

if(isset($_POST['fiesta'])){
    $etiquetas[] = "fiesta";
}

if(isset($_POST['chilling'])){
    $etiquetas[] = "chilling";
}

if(isset($_POST['comida'])){
    $etiquetas[] = "comida";
}

if(isset($_POST['amor'])){
    $etiquetas[] = "amor";
}

if(isset($_POST['concierto'])){
    $etiquetas[] = "concierto";
}

//se codifican las etiquetas para poder almacenar en la base de datos
$etiquetasCodificadas = json_encode($etiquetas);

//se carga la imagen al servidor, y guardamos su nombre en la base de datos al subir el evento
move_uploaded_file($_FILES["imagen"]["tmp_name"], "../View/images/eventos/" . $_FILES["imagen"]['name']);

$eventoSinSubir = new m_Evento($_POST['titulo'],$_POST['descripcion'],$_FILES["imagen"]['name'],$_POST['lugar'],$_POST['fecha']." ".$_POST['hora'],$etiquetasCodificadas,$_SESSION['usuariomtp']);
$eventoSinSubir->insert();

header("Location: c_inicioorganizador.php?");

?>