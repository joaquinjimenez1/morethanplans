<?php

include_once "../Model/m_Evento.php";
echo "<h2>Resultados</h2>";
m_Evento::buscador($_REQUEST['respuesta']);
?>