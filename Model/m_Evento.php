<?php
    session_start();
    include_once "m_Organizador.php";
    include_once "m_Usuario.php";

    class m_Evento {

        //el codigo solo será usado para insert y delete, 
        //ya que es autoincrementable en la base de datos y no lo necesitamos en el constructor

        private $codigo;
        private $titulo;
        private $descripcion;
        private $imagen;
        private $lugar;
        private $fecha;
        private $etiquetas;

        function __construct($titulo,$descripcion,$imagen,$lugar,$fecha,$etiquetas,$organizador){

            $this->codigo = 0;
            $this->titulo = $titulo;
            $this->descripcion = $descripcion;
            $this->imagen = $imagen;
            $this->lugar = $lugar;
            $this->fecha = $fecha;
            $this->etiquetas = $etiquetas;
            $this->organizador = $organizador;
        
        }

        public function getCodigo(){
            return $this->codigo;
        }

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
        
        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

        public function getImagen(){
            return $this->imagen;
        }

        public function setImagen($imagen){
            $this->imagen = $imagen;
        }

        public function getLugar(){
            return $this->lugar;
        }

        public function setLugar($lugar){
            $this->lugar = $lugar;
        }

        public function getFecha(){
            return $this->fecha;
        }

        public function setFecha($fecha){
            $this->fecha = $fecha;
        }

        public function getOrganizador(){
            return $this->organizador;
        }

        public function setOrganizador($organizador){
            $this->organizador = $organizador;
        }

        //Tanto en el get como en el set de las etiquetas,
        //descodificamos la información json de la base de datos 
        //para tratarlo como un array

        public function getEtiquetas(){
            $etiquetasdescodificadas = json_decode($this->etiquetas);
            return $etiquetasdescodificadas;
        }

        public function setEtiquetas($etiqueta){
            $etiquetasdescodificadas = $this->getEtiquetas();
                $etiquetasdescodificadas[] = $etiqueta;

            $this->etiquetas = json_encode($etiquetasdescodificadas);
        }


        public function insert(){

            $conexion = m_morethanplansDB::connectDB();
            $insercion = "INSERT INTO evento (titulo,descripcion,imagen,lugar,fecha,etiquetas,usuario_organizador) VALUES ('".$this->titulo."','".$this->descripcion."','".$this->imagen."','".$this->lugar."','".$this->fecha."','".$this->etiquetas."','".$this->organizador."')";
            $conexion->exec($insercion);

        }

        public function update(){

            $conexion = m_morethanplansDB::connectDB();
            $update = "UPDATE evento SET titulo='".$this->titulo."', descripcion='".$this->descripcion."', imagen='".$this->imagen."', lugar='".$this->lugar."', fecha='".$this->fecha."', etiquetas='".$this->etiquetas."', usuario_organizador='".$this->organizador."'WHERE codigo='".$this->codigo."'";
            $conexion->exec($update);

        }

        public function delete(){

            $conexion = m_morethanplansDB::connectDB();
            $borrado = "DELETE FROM evento WHERE codigo='".$this->codigo."'";
            $conexion->exec($borrado);

        }

        //devuelve un evento dado un codigo
        public static function obtenerEvento($eventoBuscado){

            $conexion = m_morethanplansDB::connectDB();
            $consulta = $conexion->query("SELECT * FROM evento WHERE codigo='".$eventoBuscado."'");

            if($consulta->rowcount()<1){
                return 0;
            }

            else {

                while ($evento = $consulta->fetchObject()) {
                    $codigoObtenido = $evento->codigo;
                    $tituloObtenido = $evento->titulo;
                    $descripcionObtenida = $evento->descripcion;
                    $imagenObtenida = $evento->imagen;
                    $lugarObtenido = $evento->lugar;
                    $fechaObtenida = $evento->fecha;
                    $etiquetasObtenidas = $evento->etiquetas;
                    $organizadorObtenido = $evento->usuario_organizador;
                }
                
                $eventoFinal = new m_Evento($tituloObtenido,$descripcionObtenida,$imagenObtenida,$lugarObtenido,$fechaObtenida,$etiquetasObtenidas,$organizadorObtenido);
                $eventoFinal->setCodigo($codigoObtenido);
    
                return $eventoFinal;

            }
            
        }

    
        public static function pintarTodosEventos(){
            
            $conexion = m_morethanplansDB::connectDB();
            $consulta = $conexion->query("SELECT codigo FROM evento");

            $i=0;
            while ($evento = $consulta->fetchObject()) {
                if($i>=3){
                    m_Evento::pintarEvento($evento->codigo);
                }
                $i++;
            }

        }

        public static function pintarTodosEventosLimitados(){
            
            $conexion = m_morethanplansDB::connectDB();
            $consulta = $conexion->query("SELECT codigo FROM evento LIMIT 3");

            while ($evento = $consulta->fetchObject()) {
                m_Evento::pintarEvento($evento->codigo);
            }

        }

        //muestra el evento del código indicado como parametro de entrada
        public static function pintarEvento($eventoBuscado){
            
            $evento = m_Evento::obtenerEvento($eventoBuscado);

           $organizador = m_Organizador::obtenerOrganizador($evento->getOrganizador());
    
                echo "<div class='card mb-3'><div class='row no-gutters'><div class='col-md-4 objetfit'>";
                echo "<img src='../View/images/eventos/".$evento->getImagen()."' class='card-img'></div>";
                echo "<div class='col-md-8'><div class='card-body'>";
                echo "<h5 class='card-title'>".$evento->getTitulo()."</h5>";
                echo "<small class='text-muted'>".$evento->getFecha()." | ".$evento->getLugar()."</small>";
                echo "<br><br><p class='card-text'>".$evento->getDescripcion()."</p>";
                

                //si se está mostrando a un usuario, mostramos el botón love,
                //y comprobamos si debe o no mostrarse marcado
                if($_SESSION['tipo']!="organizador"){
                    $usuario = m_Usuario::obtenerUsuario($_SESSION['usuariomtp']);
                    $gustos = $usuario->getGustos();
                        if(in_array($eventoBuscado,$gustos)){
                            $estilo = "iconousado";
                        }
                        else {
                            $estilo = "icono";
                        }
                    echo "<small>Evento organizado por <a class='enlaceEmpresa' href='../Controller/c_eventosempresa.php?empresa=".$organizador->getEmpresa()."'>".$organizador->getEmpresa()."</a></small>";
                    echo "<p class='card-text'><i id='".$eventoBuscado."' class='icon ".$estilo."'></i></p>";
                    echo "</div></div></div></div><br>";
                }
                //en caso contrario, mostramos los botones editar y eliminar,
                //ya que lo estaría viendo un organizador
                else {
                    echo "</div></div><form action='c_editarevento.php' method='post'>";
                    echo "<input type='hidden' name='idparaeditar' value='".$evento->getCodigo()."'>";
                    echo "<input type='submit' class='btn btn-outline-primary btn-evento' name='editar' value='EDITAR'>";
                    echo "</form>&nbsp;";
                    echo "<form action='c_borrarevento.php' method='post'>";
                    echo "<input type='hidden' name='idparaeliminar' value='".$evento->getCodigo()."'>";
                    echo "<input type='submit' class='btn btn-outline-danger btn-evento' name='eliminar' value='ELIMINAR'>";
                    echo "</form>";
                    echo "</div></div><br>";
                }
                
           
        }

        public static function pintarEventoBusqueda($eventoBuscado){
            
            $evento = m_Evento::obtenerEvento($eventoBuscado);

           $organizador = m_Organizador::obtenerOrganizador($evento->getOrganizador());
    
                echo "<div class='card mb-3'><div class='row no-gutters'><div class='col-md-4 objetfit'>";
                echo "<img src='../View/images/eventos/".$evento->getImagen()."' class='card-img'></div>";
                echo "<div class='col-md-8'><div class='card-body'>";
                echo "<h5 class='card-title'>".$evento->getTitulo()."</h5>";
                echo "<small class='text-muted'>".$evento->getFecha()." | ".$evento->getLugar()."</small>";
                echo "<br><br><p class='card-text'>".$evento->getDescripcion()."</p>";
                echo "<small>Evento organizado por <a class='enlaceEmpresa' href='../Controller/c_eventosempresa.php?empresa=".$organizador->getEmpresa()."'>".$organizador->getEmpresa()."</a></small>";
        }

        //muestra los eventos organizados por un usuario organizador recibido por parámetro
        public static function pintarEventosOrganizados($organizadorRecibido){

            $conexion = m_morethanplansDB::connectDB();
            $consulta = $conexion->query("SELECT * FROM evento WHERE usuario_organizador='".$organizadorRecibido."'");

            if($consulta->rowcount()<1){
                echo "Aún no tienes ningún evento creado.";
            }
            else {
                while ($evento = $consulta->fetchObject()) {
                    $codigos[] = $evento->codigo;
                }
                for ($i=0; $i < count($codigos); $i++) { 
                   m_Evento::pintarEvento($codigos[$i]);
                }
            }

        }

        public static function pintarEventosEmpresa($empresaRecibida){

            $conexion = m_morethanplansDB::connectDB();
            $consulta = $conexion->query("SELECT * FROM evento E, organizador O WHERE O.empresa = '".$empresaRecibida."'");

            if($consulta->rowcount()<1){
                echo "No hay eventos actualmente a nombre de esta empresa.";
            }
            else {
                while ($evento = $consulta->fetchObject()) {
                    $codigos[] = $evento->codigo;
                }
                for ($i=0; $i < count($codigos); $i++) { 
                   m_Evento::pintarEvento($codigos[$i]);
                }
            }

        }

        public static function pintarEventosLike($usuarioRecibido){

            $usuarioObtenido = m_Usuario::obtenerUsuario($usuarioRecibido);
            $losgustos = $usuarioObtenido->getGustos();

                for ($i=0; $i < count($losgustos); $i++) {

                    if(($i>=3)){
                        m_Evento::pintarEvento($losgustos[$i]);
                        $i++;
                    } 
                    
                }
        }

        public static function pintarEventosLikeLimitados($usuarioRecibido){

            $usuarioObtenido = m_Usuario::obtenerUsuario($usuarioRecibido);
            $losgustos = $usuarioObtenido->getGustos();

            $gustosexistentes = 0;

            for ($i=0; $i < count($losgustos); $i++) {
                if((m_Evento::obtenerEvento($losgustos[$i]))!=0){
                    $gustosexistentes++;
                } 
            }

            if($gustosexistentes>3){
                $limite = 3;
            }

            else {
                $limite = $gustosexistentes;
            }

                for ($i=0; $i < $limite; $i++) { 
                    
                    m_Evento::pintarEvento($losgustos[$i]);
                    
                }
        }

        public static function buscador($busqueda){

            $conexion = m_morethanplansDB::connectDB();
            $consulta = $conexion->query("SELECT * FROM evento WHERE MATCH(titulo, descripcion, lugar, etiquetas, usuario_organizador) AGAINST ('".$busqueda."')");
            


            if($consulta->rowcount()<1){
                echo "No hemos encontrado ningun evento para tí, necesitamos un poco más de información.";
            }
            else {
                
                while ($evento = $consulta->fetchObject()) {
                    $codigos[] = $evento->codigo;
                }

                if(count($codigos)>5){
                    $maximo = 5;
                }
                else {
                    $maximo = count($codigos);
                }

                for ($i=0; $i < $maximo; $i++) { 
                   m_Evento::pintarEventoBusqueda($codigos[$i]);
                }
            }

        }


}

        


    
?>