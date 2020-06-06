<?php
        include_once "../Model/m_Evento.php";

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

        $etiquetasCodificadas = json_encode($etiquetas);

        if($_FILES['imagen']['name']!= null){
            $nombreImagen = $_FILES["imagen"]['name'].date(DATE_ATOM, mktime());
            move_uploaded_file($_FILES["imagen"]["tmp_name"], "../View/images/eventos/" .$nombreImagen);
            $evento = new m_Evento($_POST['titulo'],$_POST['descripcion'],$nombreImagen,$_POST['lugar'],$_POST['fecha']." ".$_POST['hora'],$etiquetasCodificadas,$_SESSION['usuariomtp']);
        }

        else {
            $evento = new m_Evento($_POST['titulo'],$_POST['descripcion'],$_POST['imagenAnterior'],$_POST['lugar'],$_POST['fecha']." ".$_POST['hora'],$etiquetasCodificadas,$_SESSION['usuariomtp']);
        }

        $evento->setCodigo($_POST['codigo']);
        $evento->update();

        header("Location: c_inicioorganizador.php");

?>